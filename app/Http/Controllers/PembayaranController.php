<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Models\Formulir;
use App\Models\Datapermintaan;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        // $formulir = Formulir::find($id);
        // $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
        // return view('formulir.bill', compact('formulir', 'datapermintaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $formulir = Formulir::find($id);
        // $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
        // return view('formulir.bill', compact('formulir', 'datapermintaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        // dd($data);
        $pembayaran = Formulir::find($id);
        if($request->hasFile('respon_struk')){
            $f = $request->file('respon_struk');
            $file_ext_struk = $f->getClientOriginalExtension();
            $file_name_struk = "Struk-".time().".". $file_ext_struk;
            $file_path_struk = public_path('store/documen');
            $f->move($file_path_struk, $file_name_struk);
            $pembayaran->respon_struk = $file_name_struk;
        }else{
            $pembayaran->respon_struk = $request->old_bill;
        }
        $pembayaran->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
