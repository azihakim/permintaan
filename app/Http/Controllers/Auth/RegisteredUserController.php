<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // dd($data);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'kategori' =>['required', 'string', 'max:255'],
            'desk_kategori' =>['required', 'string', 'max:255'],
            'no_wa' =>['required', 'string', 'max:255'],
            'ktp' =>['required']
        ]);
        $ext = $request->ktp->getClientOriginalExtension();
        $file = "KTP-".time().".".$ext;
        $request->ktp->storeAs('public/dokumen', $file);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'kategori' => $request->kategori,
            'desk_kategori' => $request->desk_kategori,
            'no_wa' => $request->no_wa,
            'ktp' => $file
        ]);

        event(new Registered($user));

        Auth::login($user);
        // return $user;
        return redirect(RouteServiceProvider::HOME);
    }
}
