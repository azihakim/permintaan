<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use App\Models\Formulir;
use App\Models\Datapermintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('formulir.createPendidikan', compact('pendidikan'));
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

        // data diri
        $ext_suratproposal = $request->surat_proposal->getClientOriginalExtension();
        $ext_suratpengantar = $request->surat_pengantar->getClientOriginalExtension();
        $ext_suratpernyataan = $request->surat_pernyataan->getClientOriginalExtension();
        $file_suratproposal = "surat_proposal-".time().".".$ext_suratproposal;
        $file_suratpengantar = "surat_pengantar-".time().".".$ext_suratpengantar;
        $file_suratpernyataan = "surat_pernyataan-".time().".".$ext_suratpernyataan;
        $request->surat_proposal->storeAs('public/dokumen', $file_suratproposal);
        $request->surat_pengantar->storeAs('public/dokumen', $file_suratpengantar);
        $request->surat_pernyataan->storeAs('public/dokumen', $file_suratpernyataan);


        $formulir = new Formulir();
        $formulir->jenis_permintaan = "Kegiatan pendidikan dan penelitian";
        $formulir->status_form = "1";
        $formulir->nama_kegiatan = $data['nama'];
        $formulir->telepon = $data['telepon'];
        $formulir->email = $data['email'];
        $formulir->surat_proposal = $file_suratproposal;
        $formulir->surat_pengantar = $file_suratpengantar;
        $formulir->surat_pernyataan = $file_suratpernyataan;
        $formulir->deskripsi = $data['deskripsi'];
        $formulir->save();
            
        
        // data petir
        if($request->exists("cb_datapetirs")){
            foreach($data['lokasi_petir'] as $key=>$value){
                    if($value != null ){
                        $save_data=[
                            'formulir_id'   => $formulir->id,
                            'jenis_data'    => "datapetir",
                            'lokasi'        => $value,
                            'latitude'      => $data['latitude_petir'][$key],
                            'longitude'     => $data['longitude_petir'][$key],
                            'tgl_dari'      => $data['tgl_dari_petir'][$key],
                            'tgl_sampai'    => $data['tgl_sampai_petir'][$key]
                        ];
                        DB::table('datapermintaans')->insert($save_data); 
                    }
            }
    }

    // data hari hujan
    if ($request->exists("cb_dataharihujans")){
            foreach($data['lokasi_harihujan'] as $key=>$value){
                if($value != null){
                    Datapermintaan::create([
                    'formulir_id'   => $formulir->id,
                    'jenis_data'    => "dataharihujan",
                    'lokasi'        => $request->lokasi_harihujan[$key],
                    'tgl_dari'      => $request->tgl_dari_harihujan[$key],
                    'tgl_sampai'    => $request->tgl_sampai_harihujan[$key]
                    ]);
                }
            }
    }

    // data curah hujan rata-rata
    if ($request->exists("cb_datacurahhujanrataratas")){
        foreach($data['lokasi_curahhujanratarata'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datacurahhujanratarata",
                'lokasi'        => $request->lokasi_curahhujanratarata[$key],
                'tgl_dari'      => $request->tgl_dari_curahhujanratarata[$key],
                'tgl_sampai'    => $request->tgl_sampai_curahhujanratarata[$key]
                ]);
            }
        }
    }

    // data curah hujan maksimum
    if ($request->exists("cb_datacurahhujanmaksimums")){
        foreach($data['lokasi_curahhujanmaksimum'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datacurahhujanmaksimum",
                'lokasi'        => $request->lokasi_curahhujanmaksimum[$key],
                'tgl_dari'      => $request->tgl_dari_curahhujanmaksimum[$key],
                'tgl_sampai'    => $request->tgl_sampai_curahhujanmaksimum[$key]
                ]);
            }
        }
    }

    // data curah hujan bulanan
    if ($request->exists("cb_datacurahhujanbulanans")){
        foreach($data['lokasi_curahhujanbulanan'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datacurahhujanbulanan",
                'lokasi'        => $request->lokasi_curahhujanbulanan[$key],
                'tgl_dari'      => $request->tgl_dari_curahhujanbulanan[$key],
                'tgl_sampai'    => $request->tgl_sampai_curahhujanbulanan[$key]
                ]);
            }
        }
    }

    // data suhu udara rata-rata
    if ($request->exists("cb_datasuhuudararataratas")){
        foreach($data['lokasi_suhuudararatarata'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datasuhuudararatarata",
                'lokasi'        => $request->lokasi_suhuudararatarata[$key],
                'tgl_dari'      => $request->tgl_dari_suhuudararatarata[$key],
                'tgl_sampai'    => $request->tgl_sampai_suhuudararatarata[$key]
                ]);
            }
        }
    }

    // data suhu udara maksimum
    if ($request->exists("cb_datasuhuudaramaksimums")){
            foreach($data['lokasi_suhuudaramaksimum'] as $key=>$value){
                if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datasuhuudaramaksimum",
                'lokasi'        => $request->lokasi_suhuudaramaksimum[$key],
                'tgl_dari'      => $request->tgl_dari_suhuudaramaksimum[$key],
                'tgl_sampai'    => $request->tgl_sampai_suhuudaramaksimum[$key]
                ]);
            }
        }
    }

    // data suhu udara minimum
    if ($request->exists("cb_datasuhuudaraminimums")){
            foreach($data['lokasi_suhuudaraminimum'] as $key=>$value){
                if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datasuhuudaraminimum",
                'lokasi'        => $request->lokasi_suhuudaraminimum[$key],
                'tgl_dari'      => $request->tgl_dari_suhuudaraminimum[$key],
                'tgl_sampai'    => $request->tgl_sampai_suhuudaraminimum[$key]
                ]);
            }
        }
    }

    // data kelembapan udara rata-rata
    if ($request->exists("cb_datakelembapanudararataratas")){
        foreach($data['lokasi_kelembapanudararatarata'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datakelembapanudararatarata",
                'lokasi'        => $request->lokasi_kelembapanudararatarata[$key],
                'tgl_dari'      => $request->tgl_dari_kelembapanudararatarata[$key],
                'tgl_sampai'    => $request->tgl_sampai_kelembapanudararatarata[$key]
                ]);
            }
        }
    }

    // data kelembapan udara maksimum
    if ($request->exists("cb_datakelembapanudaramaksimums")){
        foreach($data['lokasi_kelembapanudaramaksimum'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datakelembapanudaramaksimum",
                'lokasi'        => $request->lokasi_kelembapanudaramaksimum[$key],
                'tgl_dari'      => $request->tgl_dari_kelembapanudaramaksimum[$key],
                'tgl_sampai'    => $request->tgl_sampai_kelembapanudaramaksimum[$key]
                ]);
            }
        }
    }

    // data kelembapan udara minimum
    if ($request->exists("cb_datakelembapanudaraminimums")){
        foreach($data['lokasi_kelembapanudaraminimum'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datakelembapanudaraminimum",
                'lokasi'        => $request->lokasi_kelembapanudaraminimum[$key],
                'tgl_dari'      => $request->tgl_dari_kelembapanudaraminimum[$key],
                'tgl_sampai'    => $request->tgl_sampai_kelembapanudaraminimum[$key]
                ]);
            }
        }
    }

    // data kecepatan dan arah angin
    if ($request->exists("cb_datakecepatandanarahangins")){
        foreach($data['lokasi_kecepatandanarahangin'] as $key=>$value){
            if($value != null){
            Datapermintaan::create([
            'formulir_id'   => $formulir->id,
            'jenis_data'    => "datakecepatandanarahangin",
            'lokasi'        => $request->lokasi_kecepatandanarahangin[$key],
            'tgl_dari'      => $request->tgl_dari_kecepatandanarahangin[$key],
            'tgl_sampai'    => $request->tgl_sampai_kecepatandanarahangin[$key]
            ]);
            }
        }
    }

    // data kecepatan angin maksimum
    if ($request->exists("cb_datakecepatananginmaksimums")){
        foreach($data['lokasi_kecepatananginmaksimum'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datakecepatananginmaksimum",
                'lokasi'        => $request->lokasi_kecepatananginmaksimum[$key],
                'tgl_dari'      => $request->tgl_dari_kecepatananginmaksimum[$key],
                'tgl_sampai'    => $request->tgl_sampai_kecepatananginmaksimum[$key]
                ]);
            }
        }
    }

    // data lama penyinaran matahari
    if ($request->exists("cb_datalamapenyinaranmataharis")){
        foreach($data['lokasi_lamapenyinaranmatahari'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "datalamapenyinaranmatahari",
                'lokasi'        => $request->lokasi_lamapenyinaranmatahari[$key],
                'tgl_dari'      => $request->tgl_dari_lamapenyinaranmatahari[$key],
                'tgl_sampai'    => $request->tgl_sampai_lamapenyinaranmatahari[$key]
                ]);
            }
        }
    }

    // data prakiraan musim
    if ($request->exists("cb_dataprakiraanmusims")){
        foreach($data['lokasi_prakiraanmusim'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "dataprakiraanmusim",
                'lokasi'        => $request->lokasi_prakiraanmusim[$key],
                'tgl_dari'      => $request->tgl_dari_prakiraanmusim[$key],
                'tgl_sampai'    => $request->tgl_sampai_prakiraanmusim[$key]
                ]);
            }
        }
    }

    // data klasifikasi iklim
    if ($request->exists("cb_dataklasifikasiiklims")){
        foreach($data['lokasi_klasifikasiiklim'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "dataklasifikasiiklim",
                'lokasi'        => $request->lokasi_klasifikasiiklim[$key],
                'tgl_dari'      => $request->tgl_dari_klasifikasiiklim[$key],
                'tgl_sampai'    => $request->tgl_sampai_klasifikasiiklim[$key]
                ]);
            }
        }
    }

    // data radiasi matahari
    if ($request->exists("cb_dataradiasimataharis")){
        foreach($data['lokasi_radiasimatahari'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'   => $formulir->id,
                'jenis_data'    => "dataradiasimatahari",
                'lokasi'        => $request->lokasi_radiasimatahari[$key],
                'tgl_dari'      => $request->tgl_dari_radiasimatahari[$key],
                'tgl_sampai'    => $request->tgl_sampai_radiasimatahari[$key]
                ]);
            }
        }
    }

    // unsur cuaca lainnya
    if ($request->exists("cb_unsurcuacalainnyas")){
        foreach($data['lokasi_unsurcuacalainnya'] as $key=>$value){
            if($value != null){
                Datapermintaan::create([
                'formulir_id'          => $formulir->id,
                'jenis_data'           => "unsurcuacalainnya",
                'unsurcuacalain'       => $request->deskripsi_unsurcuacalainnya,
                'lokasi'               => $request->lokasi_unsurcuacalainnya[$key],
                'tgl_dari'             => $request->tgl_dari_unsurcuacalainnya[$key],
                'tgl_sampai'           => $request->tgl_sampai_unsurcuacalainnya[$key]
                ]);
            }
        }
    }

    return redirect('dashboarduser')->with('status', 'Data berhasil di kirim');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function show(Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Datapermintaan $datapermintaan, Formulir $formulir)
    {
        //
        $formulir = Formulir::find($id);
        $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
        return view('formulir.editPendidikan', compact('formulir', 'datapermintaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Formulir::find($id)->delete();
        Datapermintaan::where("formulir_id", $id)->delete();
        return redirect()->back();
    }
}
