<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class AuthenticatedSessionController extends Controller
{
      /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
//    public function store(LoginRequest $request)
//    {
//        $request->authenticate();
//
//        $request->session()->regenerate();
//
//        $remember = $request->filled('remember') ? 1 : 0;
//        $user = auth()->user();
//        $role = Role::where('name', $user->role)->first();
//        $first_role = $role->permissions->pluck('name')->all()[0]; // get auth user first page permission.
//        $page = explode('-', $first_role);
//        if ($page[0] == 'reports') {
//            $first_role = $role->permissions->pluck('name')->all()[1];
//            $page = explode('-', $first_role);
//        }
//
//        return response()->json([
//            'message' => __('Logged In Successfully'),
//            'remember' => $remember,
//            'redirect' => route('author.'.$page[0].'.index'),
//        ]);
//    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = auth()->user();
        $role = Role::where('name', $user->role)->first();

        if ($role && $role->name === $user->role) {
            $firstRole = $role->permissions->pluck('name')->first();
            if ($firstRole) {
                $page = explode('-', $firstRole);
                if ($page[0] == 'reports') {
                    $firstRole = $role->permissions->pluck('name')->get(1);
                    $page = explode('-', $firstRole);
                }
                //return redirect()->route($role->name .'.'. $page[0] . '.index');
                return response()->json([
                    'message' => __('Logged In Successfully'),
                    'remember' => $request->filled('remember') ? 1 : 0,
                    'redirect' => route($role->name .'.'. $page[0] . '.index'),
                ]);
            }
        } else {
            auth()->logout();
            return response()->json('You are not authorized to access this system.', 403);
        }
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
