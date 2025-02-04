<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $user = User::findOrFail(auth()->id());
        return response()->json($user); */
        /*  $user = array();
        $user = auth()->user();
        $doctor = User::where('type', 'doctor')->get();
        $doctorData = Doctor::all();
        foreach ($doctorData as $data) {
            foreach ($doctor as  $info) {
                if ($data['doc_id'] == $info['id']) {
                   $data['doctor_name'] = $info['name'];
                   $data['doctor_profile'] = $info['profile_photo_url'];
                }
            }
        }
        $user['doctors'] = $doctorData; */
        $user = auth()->user();
        $user['doctors'] = Doctor::with(['user:id,name'])->get();

        return response()->json($user);
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
            //return response()->json(['message' => 'The provided credentials are incorrect.'], 401);
        }

        return $user->createToken($request->email)->plainTextToken;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            //'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => 'user',
            'password' => bcrypt($request->password),
        ]);
        $user->userDetails()->create([
            'status' => 'active',
        ]);

        $token = $user->createToken('api_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'data' => new UserResource($user),
            'token' => $token,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
