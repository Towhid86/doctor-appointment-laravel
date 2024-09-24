<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class BaariLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::latest()->paginate(10);
        return view('author.settings.languages.index',compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.settings.languages.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'alias'     => 'required|string|max:255',
            'direction' => 'required|in:ltl,rtl',
            'flag'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100|dimensions:max_width=32,max_height=32',
            'status'    => 'nullable|in:on',
        ]);

        $data = [];

        if($request->flag){
            $data['flag'] = imageUpload($request->file('flag'),'flags');
        }
        $data['status'] = $request->status ? 1 : 0;

        Language::create(array_merge($request->except(['_token', 'flag', 'status']), $data));

        return response()->json([
            'message'   => __('Flag created successfully'),
            'redirect'  => route('author.language-settings.index')
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $language = Language::findOrfail($id);
        return view('author.settings.languages.edit', compact('language'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'alias'     => 'required|string|max:255',
            'direction' => 'required|in:ltl,rtl',
            'flag'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100|dimensions:max_width=32,max_height=32',
            'status'    => 'nullable|in:on',
        ]);

        $language = Language::findOrfail($id);

        $data = [];

        if ($request->has('flag')){
            $data['flag'] = imageUpload($request->file('flag'),'flags', $language->flag);
        }

        $data['status'] = $request->status ? 1 : 0;

        $language->update(array_merge($request->except(['_token', 'flag', 'status']), $data));

        return response()->json([
            'message'   => __('Tutorial updated successfully'),
            'redirect'  => route('author.language-settings.index')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $language = Language::findOrFail($id);
        uploadImageDelete(ltrim($language->flag,'storage/'));

        $language->delete();

        return response()->json([
            'message'   => __('Tutorial deleted successfully'),
            'redirect'  => route('author.language-settings.index')
        ]);
    }



    public function deleteAll(Request $request)
    {
        $idsToDelete = $request->input('ids');

        $languages = Language::whereIn('id', $idsToDelete)->get();
        foreach ($languages as $language) {
            uploadImageDelete(ltrim($language->flag,'storage/'));
        }

        Language::whereIn('id', $idsToDelete)->delete();

        return response()->json([
            'message'   => __('Tutorial deleted successfully'),
            'redirect'  => route('author.language-settings.index')
        ]);
    }

    public function status(Request $request, $id)
    {
        $language = Language::findOrFail($id);
        $language->update(['status' => $request->status]);
        return response()->json(['message' => 'Language']);
    }

    public function default(Request $request, $id)
    {
        $language = Language::findOrFail($id);

        if ($language->default == 0) {
            Language::where('id', '!=', $language->id)->update(['default' => 0]);
        }
        $language->update(['default' => 1]);

        return response()->json([
            'message'   => __('Default updated successfully'),
            'redirect'  => route('author.language-settings.index')
        ]);
    }
}
