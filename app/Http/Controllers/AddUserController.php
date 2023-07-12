<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AddUserController extends Controller
{
    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request['nama'];
        $data->nip = $request['nip'];
        $data->email = $request['email'];
        $data->kategori = 'Pegawai';
        $data->instansi = 'BMKG-STAKLIM SUMSEL';
        $data->role = $request->input('role');
        $data->password = Hash::make($request['nip']);
        $data->save();
        
        return back();
    }
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return back();
    }
}
