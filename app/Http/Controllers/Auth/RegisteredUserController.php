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
            'instansi' =>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'kategori' =>['required', 'string', 'max:255'],
            // 'desk_kategori' =>['required', 'string', 'max:255'],
            'no_wa' =>['required', 'string', 'max:255'],
            'ktp' =>['required']
        ]);
        $ext_ktp = $request->ktp->getClientOriginalExtension();
        $file_ktp = "KTP-".time().".".$ext_ktp;
        $request->ktp->storeAs('public/dokumen', $file_ktp);

        if ($request->exists("ktm")){
            $ext_ktm = $request->ktm->getClientOriginalExtension();
            $file_ktm = "KTM-".time().".".$ext_ktm;
            $request->ktm->storeAs('public/dokumen', $file_ktm);
            $user = User::create([
                'name' => $request->name,
                'instansi' => $request->instansi,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'kategori' => $request->kategori,
                'desk_kategori' => $request->desk_kategori,
                'no_wa' => $request->no_wa,
                'ktp' => $file_ktp,
                'ktm' => $file_ktm
            ]);
        }else{
            $user = User::create([
                'name' => $request->name,
                'instansi' => $request->instansi,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'kategori' => $request->kategori,
                'desk_kategori' => $request->desk_kategori,
                'no_wa' => $request->no_wa,
                'ktp' => $file_ktp,
            ]);
        }
        
        



        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
        
    }
}
