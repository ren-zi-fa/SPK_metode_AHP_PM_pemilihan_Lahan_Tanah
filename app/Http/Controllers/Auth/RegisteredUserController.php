<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\BobotLangsung;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('User');
        $init_bobot_langsung = BobotLangsung::create(
            [
                'id_user'   => $user->id,
                'c1'        => 1,
                'c2'        => 1,
                'c3'        => 1,
                'c4'        => 1,
                'c5'        => 1,
                'c6'        => 1,
                'c7'        => 1,
                'c8'        => 1,
                'c9'        => 1,
                'c10'       => 1,
                'c11'       => 1,
                'c12'       => 1,
            ]
        );
        event(new Registered($user));
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with('flash_notification.success', 'Anda Telah Terdaftar Sebagai User Dan Login Berhasil');
    }
}
