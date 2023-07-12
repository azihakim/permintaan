<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsermasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('menu.akun', compact('user'));
    }

    public function edit($id, User $user)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('menu.akun', compact('user'));
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_id = auth()->user()->id;
        $data = User::find($user_id);
        $data->update([
            'name' => $request->nama,
            'instansi' => $request->instansi,
            'no_wa' => $request->no_wa
        ]);
        return back();
    }

}
