<?php

namespace App\Http\Controllers;

use App\Models\Keagamaan;
use App\Models\Daftarpermintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeagamaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('formulir.createKeagamaan', compact('keagamaan'));
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
                
            
            $data = $request->all();
            // dd($data);

            // data formulir
            $keagamaan = new Keagamaan();
            $keagamaan->nama_kegiatan = $data['nama_kegiatan'];
            $keagamaan->telepon = $data['telepon'];
            $keagamaan->email = $data['email'];
            $keagamaan->surat_pernyataan = $data['surat_pernyataan'];
            $keagamaan->deskripsi = $data['deskripsi'];
            $keagamaan->save();

            $save_data=[];
            if($request->exists("cb_datapetir")){
                    foreach($data['lokasi_petir'] as $key=>$value){
                        $save_data[]=[
                            'formulir_id'   => $keagamaan->id,
                            'jenis_data'        => "data petir",
                            'lokasi'        => $value,
                            'latitude'      => $data['latitude_petir'][$key],
                            'longitude'     => $data['longitude_petir'][$key],
                            'tgl_dari'      => $data['tgl_dari_petir'][$key],
                            'tgl_sampai'    => $data['tgl_sampai_petir'][$key]
                        ];
                    }
            }
            DB::table('datapermintaans')->insert($save_data); 

            // $save_hujan=[];
            // foreach($data['lokasi_harihujan'] as $key=>$value){
            //     $save_hujan[]=[
            //         'formulir_id'   => $keagamaan->id,
            //         'lokasi_harihujan'        => $value,
            //         'tgl_dari_harihujan'      => $data['tgl_dari_harihujan'][$key],
            //         'tgl_sampai_harihujan'    => $data['tgl_sampai_harihujan'][$key]
            //     ];
            // }
            // DB::table('dataharihujans')->insert($save_hujan);        

            $save_hujan=[];
            foreach($data['lokasi_harihujan'] as $key=>$value){
                $save_hujan[]=[
                    'formulir_id'   => $keagamaan->id,
                    'jenis_data'        => "data hujan",
                    'lokasi'        => $value,
                    'tgl_dari'      => $data['tgl_dari_harihujan'][$key],
                    'tgl_sampai'    => $data['tgl_sampai_harihujan'][$key]
                ];
            }
            DB::table('datapermintaans')->insert($save_hujan);


            return redirect()->back()->with('status', 'Data Berhasil Di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keagamaan  $keagamaan
     * @return \Illuminate\Http\Response
     */
    public function show(Keagamaan $keagamaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keagamaan  $keagamaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keagamaan $keagamaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keagamaan  $keagamaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keagamaan $keagamaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keagamaan  $keagamaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keagamaan $keagamaan)
    {
        //
    }
}
