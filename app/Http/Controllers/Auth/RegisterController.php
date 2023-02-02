<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => '0',
            'kategori' => $data['kategori'],
            'no_wa' => $data['no_wa'],
            'desk_kategori' =>request()->desk_kategori,
            'instansi' => $data['instansi']
        ]);
        $ext_ktp = request()->ktp->getClientOriginalExtension();
        $file_ktp = "KTP-".time().".".$ext_ktp;
        request()->ktp->storeAs('public/dokumen', $file_ktp);
        $user->update(['ktp' => $file_ktp]);
        if (request()->exists("ktm")){
            $ext_ktm = request()->ktm->getClientOriginalExtension();
            $file_ktm = "KTM-".time().".".$ext_ktm;
            request()->ktm->storeAs('public/dokumen', $file_ktm);
            $user->update(['ktm' => $file_ktm]);
        }
        return $user;
    }
}
