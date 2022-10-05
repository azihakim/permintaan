<?php

namespace App\Http\Controllers;

use App\Models\Dataharihujan;
use Illuminate\Http\Request;
use App\Models\Layananbertarif;
use App\Models\Formulir;
use App\Models\Datapermintaan;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class LayananbertarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulir.createLayananBertarif', compact('bertarif'));
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

            $data = $request->all();
            // dd($data);

            // data diri
            $layananbertarif = new Formulir();
            $layananbertarif->jenis_permintaan = "layanan bertarif";
            $layananbertarif->nama = $data['nama'];
            $layananbertarif->telepon = $data['telepon'];
            $layananbertarif->email = $data['email'];
            $layananbertarif->surat_pengantar = $data['surat_pengantar'];
            $layananbertarif->deskripsi = $data['deskripsi'];
            $layananbertarif->save();
            // data petir
            // $lokasi = count($request->lokasi);
            // for($i = 0; $i < $lokasi; $i++){
            //     Datapetir::create([
            //             'formulir_id'   => $layananbertarif->id,
            //             'lokasi'        => $request->lokasi[$i],
            //             'latitude'      => $request->latitude[$i],
            //             'longitude'     => $request->longitude[$i],
            //             'tgl_dari'      => $request->tgl_dari[$i],
            //             'tgl_sampai'    => $request->tgl_sampai[$i]
            //     ]);
            // }
            
            // data hari hujan
            // $lokasi_harihujan = count($request->lokasi_harihujan);
            // for($i = 0; $i < $lokasi_harihujan; $i++){
            //     Dataharihujan::create([
            //             'formulir_id'             => $layananbertarif->id,
            //             'lokasi_harihujan'        => $request->lokasi_harihujan[$i],
            //             'tgl_dari_harihujan'      => $request->tgl_dari_harihujan[$i],
            //             'tgl_sampai_harihujan'    => $request->tgl_sampai_harihujan[$i]
            //     ]);
            // }

            // data hari hujan rata-rata
            // $lokasi_curahhujanratarata = count($request->lokasi_curahhujanratarata);
            // for($i = 0; $i < $lokasi_curahhujanratarata; $i++){
            //     Datacurahhujanratarata::create([
            //             'formulir_id'             => $layananbertarif->id,
            //             'lokasi_curahhujanratarata'        => $request->lokasi_curahhujanratarata[$i],
            //             'tgl_dari_curahhujanratarata'      => $request->tgl_dari_curahhujanratarata[$i],
            //             'tgl_sampai_curahhujanratarata'    => $request->tgl_sampai_curahhujanratarata[$i]
            //     ]);
            // }

            // $datapetir = new Datapetir;
            // $datapetir->formulir_id = $layananbertarif->id;
            // $datapetir->lokasi = $data['lokasi'];
            // $datapetir->latitude = $data['latitude'];
            // $datapetir->longitude = $data['longitude'];
            // $datapetir->tgl_dari = $data['tgl_dari'];
            // $datapetir->tgl_sampai = $data['tgl_sampai'];
            // $datapetir->save();

            // $lokasi = count($request->lokasi);
            // if (count($data[$lokasi])) {
            //     foreach (['lokasi'] as $item => $value) {
            //         $data2 = array(
            //             'formulir_id'   => $layananbertarif->id,
            //             'lokasi'        => $data['lokasi'][$item],
            //             'latitude'      => $data['latitude'][$item],
            //             'longitude'     => $data['longitude'][$item],
            //             'tgl_dari'      => $data['tgl_dari'][$item],
            //             'tgl_sampai'    => $data['tgl_sampai'][$item]
            //         );
            //         Datapetir::create($data2);
            //     }
            // };
            
            
            // foreach($data['lokasi_petir'] as $key=>$value){
            // $datapetir->formulir_id = $layananbertarif->id;
            // $datapetir->jenis_data = "data petir";
            // $datapetir->lokasi = $data['lokasi_petir'][$key];
            // $datapetir->latitude = $data['latitude_petir'][$key];
            // $datapetir->longitude = $data['longitude_petir'][$key];
            // $datapetir->tgl_dari = $data['tgl_dari_petir'][$key];
            // $datapetir->tgl_sampai = $data['tgl_sampai_petir'][$key];
            // $datapetir->save();
            // }
        
            
            
            if($request->exists("cb_datapetirs")){
                // $save_data=[];
                // foreach($data['lokasi_petir'] as $key=>$value){
                //     $save_data[]=[
                //         'formulir_id'   => $layananbertarif->id,
                //         'jenis_data'    => "data petir",
                //         'lokasi'        => $value,
                //         'latitude'      => $data['latitude_petir'][$key],
                //         'longitude'     => $data['longitude_petir'][$key],
                //         'tgl_dari'      => $data['tgl_dari_petir'][$key],
                //         'tgl_sampai'    => $data['tgl_sampai_petir'][$key]
                //     ];  
                // DB::table('datapermintaans')->insert($save_data); 
                $petir = count($request->lokasi_petir);
                    for($i = 0; $i < $petir ; $i++){
                        Datapermintaan::create([
                                'formulir_id'   => $layananbertarif->id,
                                'jenis_data'    => 'data petir',
                                'lokasi'        => $request->lokasi_petir[$i],
                                'latitude'      => $request->latitude_petir[$i],
                                'longitude'     => $request->longitude_petir[$i],
                                'tgl_dari'      => $request->tgl_dari_petir[$i],
                                'tgl_sampai'    => $request->tgl_sampai_petir[$i]
                        ]);
                    }
            }
            
            if ($request->exists("cb_dataharihujans")){
            //     $save_hujan=[];
            //     foreach($data['lokasi_harihujan'] as $key=>$value){
            //         $save_hujan[]=[
            //             'formulir_id'   => $layananbertarif->id,
            //             'jenis_data'     => "data hari hujan",
            //             'lokasi'        => $value,
            //             'tgl_dari'      => $data['tgl_dari_harihujan'][$key],
            //             'tgl_sampai'    => $data['tgl_sampai_harihujan'][$key]
            //         ];
            //     DB::table('datapermintaans')->insert($save_hujan); 
            //     } 
                    
                    $hujan= count($request->lokasi_harihujan);
                    
                    for($i = 0; $i < $hujan ; $i++){
                        Datapermintaan::create([
                        'formulir_id'   => $layananbertarif->id,
                        'jenis_data'    => "data hari hujan",
                        'lokasi'        => $request->lokasi_harihujan[$i],
                        'tgl_dari'      => $request->tgl_dari_harihujan[$i],
                        'tgl_sampai'    => $request->tgl_sampai_harihujan[$i]
                        ]);
                    }
            }
            return redirect()->back()->with('status', 'Data Berhasil Di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layananbertarif  $layananbertarif
     * @return \Illuminate\Http\Response
     */
    public function show(Layananbertarif $layananbertarif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layananbertarif  $layananbertarif
     * @return \Illuminate\Http\Response
     */
    public function edit(Layananbertarif $layananbertarif)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layananbertarif  $layananbertarif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layananbertarif $layananbertarif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layananbertarif  $layananbertarif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layananbertarif $layananbertarif)
    {
        //
    }
}
