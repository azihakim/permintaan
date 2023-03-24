<?php

namespace App\Http\Controllers;

use App\Models\Penanggulanganbencana;
use App\Models\Formulir;
use App\Models\Datapermintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenanggulanganbencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('formulir.createPenanggulanganbencana', compact('penanggulanganbencana'));
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

            // $file = $request->validate('surat_pengantar => max:50000');

            // data diri
            $ext = $request->surat_pengantar->getClientOriginalExtension();
            $file = "surat_pengantar-".time().".".$ext;
            $request->surat_pengantar->storeAs('public/dokumen', $file);
            $formulir = new Formulir();
            $formulir->jenis_permintaan = "Kegiatan penanggulangan bencana";
            $formulir->status_form = "1";
            $formulir->user_id =$request->user()->id;
            $formulir->surat_pengantar = $file;
            $formulir->deskripsi = $request['deskripsi'];
            $formulir->save();

        // data petir
        // if($request->exists("cb_datapetirs")){
        //         foreach($data['lokasi_petir'] as $key=>$value){
        //                 if($value != null ){
        //                     $save_data=[
        //                         'formulir_id'   => $data->id,
        //                         'jenis_data'    => "datapetir",
        //                         'lokasi'        => $value,
        //                         'latitude'      => $data['latitude_petir'][$key],
        //                         'longitude'     => $data['longitude_petir'][$key],
        //                         'tgl_dari'      => $data['tgl_dari_petir'][$key],
        //                         'tgl_sampai'    => $data['tgl_sampai_petir'][$key]
        //                     ];
        //                     DB::table('datapermintaans')->create($save_data);
        //                 }
        //         }
        // }
        if ($request->exists("cb_datapetirs")){
            foreach($data['lokasi_petir'] as $key=>$value){
                if($value != null){
                    Datapermintaan::create([
                    'formulir_id'          => $formulir->id,
                    'jenis_data'           => "datapetir",
                    'desk_petir'           => $request->desk_petir,
                    'lokasi'               => $request->lokasi_petir[$key],
                    'tgl_dari'             => $request->tgl_dari_petir[$key],
                    // 'tgl_sampai'           => $request->tgl_sampai_petir[$key]
                    ]);
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

        return redirect('dashboard')->with('status', 'Data berhasil di kirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penanggulanganbencana  $penanggulanganbencana
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($formulir = Formulir::find($id) != null ){
            $formulir = Formulir::find($id);
            $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
            return view('formulir.showPenanggulanganbencana', compact('formulir', 'datapermintaan'));

        }else{
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penanggulanganbencana  $penanggulanganbencana
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Datapermintaan $datapermintaan, Formulir $formulir)
    {
        if($formulir = Formulir::find($id) != null ){
            $formulir = Formulir::find($id);
            $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
            return view('formulir.editPenanggulanganbencana', compact('formulir', 'datapermintaan'));

        }else{
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penanggulanganbencana  $penanggulanganbencana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Formulir $formulir)
    {   
        $formulir = Formulir::find($id);
        $formulir ->deskripsi = $request->input('deskripsi');
        $file_name = $formulir->surat_pengantar;
        $file_path = public_path('storage/dokumen/' . $file_name);

        if ($request->hasFile('surat_pengantar')){
            unlink($file_path);

            $f = $request->file('surat_pengantar');
            $file_ext = $f->getClientOriginalExtension();
            $file_name = "surat_pengantar-".time(). "." . $file_ext;
            $file_path = public_path('storage/dokumen');
            $f->move($file_path, $file_name);
            $formulir->surat_pengantar = $file_name;
        } else{
            $formulir->surat_pengantar =$request->old_file;
        }

        $formulir->save();
        // $data = $request->all();
        // dd($data);

        // data petir
        $cek_datapetir = $request->lokasi_datapetir;
        if (isset($cek_datapetir)){
            for($i = 0; $i < count($request->lokasi_datapetir) ; $i++){
                $petir = Datapermintaan::where('id', $request->id_df_datapetir[$i]);
                $petir->update([
                            'lokasi'        => $request->lokasi_datapetir[$i],
                            'desk_petir'    => $request->deskripsi_datapetir,
                            'tgl_dari'      => $request->tgl_dari_datapetir[$i],
                ]);
            }
        }
        // data hari hujan
        $cek_dataharihujan = $request->lokasi_dataharihujan;
        if (isset($cek_dataharihujan)){
            for($i = 0; $i < count($request->lokasi_dataharihujan) ; $i++){
                $harihujan = Datapermintaan::where('id', $request->id_df_dataharihujan[$i]);
                $harihujan->update([ 
                'lokasi'        => $request->lokasi_dataharihujan[$i],
                'tgl_dari'      => $request->tgl_dari_dataharihujan[$i],
                'tgl_sampai'    => $request->tgl_sampai_dataharihujan[$i]
                ]);
            }
        }

        // data curah hujan rata-rata
        $cek_datacurahhujanratarata = $request->lokasi_datacurahhujanratarata;
        if (isset($cek_datacurahhujanratarata)){
            for($i = 0; $i < count($request->lokasi_datacurahhujanratarata) ; $i++){
                $curahhujanratarata = Datapermintaan::where('id', $request->id_df_datacurahhujanratarata[$i]);
                $curahhujanratarata->update([
                'lokasi'        => $request->lokasi_datacurahhujanratarata[$i],
                'tgl_dari'      => $request->tgl_dari_datacurahhujanratarata[$i],
                'tgl_sampai'    => $request->tgl_sampai_datacurahhujanratarata[$i]
                ]);
            }
        }

        // data curah hujan maksimum
        $cek_datacurahhujanmaksimum = $request->lokasi_datacurahhujanmaksimum;
        if (isset($cek_datacurahhujanmaksimum)){
            for($i = 0; $i < count($request->lokasi_datacurahhujanmaksimum) ; $i++){
                $curahhujanmaksimum = Datapermintaan::where('id', $request->id_df_datacurahhujanmaksimum[$i]);
                $curahhujanmaksimum->update([
                'lokasi'        => $request->lokasi_datacurahhujanmaksimum[$i],
                'tgl_dari'      => $request->tgl_dari_datacurahhujanmaksimum[$i],
                'tgl_sampai'    => $request->tgl_sampai_datacurahhujanmaksimum[$i]
                ]);
            }
        }

        // data curah hujan bulanan
        $cek_datacurahhujanbulanan = $request->lokasi_datacurahhujanbulanan;
        if (isset($cek_datacurahhujanbulanan)){
            for($i = 0; $i < count($request->lokasi_datacurahhujanbulanan) ; $i++){
                $curahhujanbulanan = Datapermintaan::where('id', $request->id_df_datacurahhujanbulanan[$i]);
                $curahhujanbulanan->update([
                'lokasi'        => $request->lokasi_datacurahhujanbulanan[$i],
                'tgl_dari'      => $request->tgl_dari_datacurahhujanbulanan[$i],
                'tgl_sampai'    => $request->tgl_sampai_datacurahhujanbulanan[$i]
                ]);
            }
        }

        // data suhu udara rata-rata
        $cek_datasuhuudararatarata = $request->lokasi_datasuhuudararatarata;
        if (isset($cek_datasuhuudararatarata)){
            for($i = 0; $i < count($request->lokasi_datasuhuudararatarata) ; $i++){
                $suhuudararatarata = Datapermintaan::where('id', $request->id_df_datasuhuudararatarata[$i]);
                $suhuudararatarata->update([
                'lokasi'        => $request->lokasi_datasuhuudararatarata[$i],
                'tgl_dari'      => $request->tgl_dari_datasuhuudararatarata[$i],
                'tgl_sampai'    => $request->tgl_sampai_datasuhuudararatarata[$i]
                ]);
            }
        }

        // data suhu udara maksimum
        $cek_datasuhuudaramaksimum = $request->lokasi_datasuhuudaramaksimum;
        if (isset($cek_datasuhuudaramaksimum)){
            for($i = 0; $i < count($request->lokasi_datasuhuudaramaksimum) ; $i++){
                $suhuudaramaksimum = Datapermintaan::where('id', $request->id_df_datasuhuudaramaksimum[$i]);
                $suhuudaramaksimum->update([
                'lokasi'        => $request->lokasi_datasuhuudaramaksimum[$i],
                'tgl_dari'      => $request->tgl_dari_datasuhuudaramaksimum[$i],
                'tgl_sampai'    => $request->tgl_sampai_datasuhuudaramaksimum[$i]
                ]);
            }
        }

        // data suhu udara minimum
        $cek_datasuhuudaraminimum = $request->lokasi_datasuhuudaraminimum;
        if (isset($cek_datasuhuudaraminimum)){
            for($i = 0; $i < count($request->lokasi_datasuhuudaraminimum) ; $i++){
                $suhuudaraminimum = Datapermintaan::where('id', $request->id_df_datasuhuudaraminimum[$i]);
                $suhuudaraminimum->update([
                'lokasi'        => $request->lokasi_datasuhuudaraminimum[$i],
                'tgl_dari'      => $request->tgl_dari_datasuhuudaraminimum[$i],
                'tgl_sampai'    => $request->tgl_sampai_datasuhuudaraminimum[$i]
                ]);
            }
        }

        // data kelembapan udara rata-rata
        $cek_datakelembapanudararatarata = $request->lokasi_datakelembapanudararatarata;
        if (isset($cek_datakelembapanudararatarata)){
            for($i = 0; $i < count($request->lokasi_datakelembapanudararatarata) ; $i++){
                $kelembapanudararatarata = Datapermintaan::where('id', $request->id_df_datakelembapanudararatarata[$i]);
                $kelembapanudararatarata->update([
                'lokasi'        => $request->lokasi_datakelembapanudararatarata[$i],
                'tgl_dari'      => $request->tgl_dari_datakelembapanudararatarata[$i],
                'tgl_sampai'    => $request->tgl_sampai_datakelembapanudararatarata[$i]
                ]);
            }
        }

        // data kelembapan udara maksimum
        $cek_datakelembapanudaramaksimum = $request->lokasi_datakelembapanudaramaksimum;
        if (isset($cek_datakelembapanudaramaksimum)){
            for($i = 0; $i < count($request->lokasi_datakelembapanudaramaksimum) ; $i++){
                $kelembapanudaramaksimum = Datapermintaan::where('id', $request->id_df_datakelembapanudaramaksimum[$i]);
                $kelembapanudaramaksimum->update([
                'lokasi'        => $request->lokasi_datakelembapanudaramaksimum[$i],
                'tgl_dari'      => $request->tgl_dari_datakelembapanudaramaksimum[$i],
                'tgl_sampai'    => $request->tgl_sampai_datakelembapanudaramaksimum[$i]
                ]);
            }
        }

        // data kelembapan udara minimum
        $cek_datakelembapanudaraminimum = $request->lokasi_datakelembapanudaraminimum;
        if (isset($cek_datakelembapanudaraminimum)){
            for($i = 0; $i < count($request->lokasi_datakelembapanudaraminimum) ; $i++){
                $kelembapanudaraminimum = Datapermintaan::where('id', $request->id_df_datakelembapanudaraminimum[$i]);
                $kelembapanudaraminimum->update([
                'lokasi'        => $request->lokasi_datakelembapanudaraminimum[$i],
                'tgl_dari'      => $request->tgl_dari_datakelembapanudaraminimum[$i],
                'tgl_sampai'    => $request->tgl_sampai_datakelembapanudaraminimum[$i]
                ]);
            }
        }

        // data kecepatan dan arah angin
        $cek_datakecepatandanarahangin = $request->lokasi_datakecepatandanarahangin;
        if (isset($cek_datakecepatandanarahangin)){
            for($i = 0; $i < count($request->lokasi_datakecepatandanarahangin) ; $i++){
                $kecepatandanarahangin = Datapermintaan::where('id', $request->id_df_datakecepatandanarahangin[$i]);
                $kecepatandanarahangin->update([
                'lokasi'        => $request->lokasi_datakecepatandanarahangin[$i],
                'tgl_dari'      => $request->tgl_dari_datakecepatandanarahangin[$i],
                'tgl_sampai'    => $request->tgl_sampai_datakecepatandanarahangin[$i]
                ]);
            }
        }

        // data kecepatan angin maksimum
        $cek_datakecepatananginmaksimum = $request->lokasi_datakecepatananginmaksimum;
        if (isset($cek_datakecepatananginmaksimum)){
            for($i = 0; $i < count($request->lokasi_datakecepatananginmaksimum) ; $i++){
                $kecepatananginmaksimum = Datapermintaan::where('id', $request->id_df_datakecepatananginmaksimum[$i]);
                $kecepatananginmaksimum->update([
                'lokasi'        => $request->lokasi_datakecepatananginmaksimum[$i],
                'tgl_dari'      => $request->tgl_dari_datakecepatananginmaksimum[$i],
                'tgl_sampai'    => $request->tgl_sampai_datakecepatananginmaksimum[$i]
                ]);
            }
        }

        // data lama penyinaran matahari
        $cek_datalamapenyinaranmatahari = $request->lokasi_datalamapenyinaranmatahari;
        if (isset($cek_datalamapenyinaranmatahari)){
            for($i = 0; $i < count($request->lokasi_datalamapenyinaranmatahari) ; $i++){
                $lamapenyinaranmatahari = Datapermintaan::where('id', $request->id_df_datalamapenyinaranmatahari[$i]);
                $lamapenyinaranmatahari->update([
                'lokasi'        => $request->lokasi_datalamapenyinaranmatahari[$i],
                'tgl_dari'      => $request->tgl_dari_datalamapenyinaranmatahari[$i],
                'tgl_sampai'    => $request->tgl_sampai_datalamapenyinaranmatahari[$i]
                ]);
            }
        }

        // data prakiraan musim
        $cek_dataprakiraanmusim = $request->lokasi_dataprakiraanmusim;
        if (isset($cek_dataprakiraanmusim)){
            for($i = 0; $i < count($request->lokasi_dataprakiraanmusim) ; $i++){
                $prakiraanmusim = Datapermintaan::where('id', $request->id_df_dataprakiraanmusim[$i]);
                $prakiraanmusim->update([
                'lokasi'        => $request->lokasi_dataprakiraanmusim[$i],
                'tgl_dari'      => $request->tgl_dari_dataprakiraanmusim[$i],
                'tgl_sampai'    => $request->tgl_sampai_dataprakiraanmusim[$i]
                ]);
            }
        }

        // data klasifikasi iklim
        $cek_dataklasifikasiiklim = $request->lokasi_dataklasifikasiiklim;
        if (isset($cek_dataklasifikasiiklim)){
            for($i = 0; $i < count($request->lokasi_dataklasifikasiiklim) ; $i++){
                $klasifikasiiklim = Datapermintaan::where('id', $request->id_df_dataklasifikasiiklim[$i]);
                $klasifikasiiklim->update([
                'lokasi'        => $request->lokasi_dataklasifikasiiklim[$i],
                'tgl_dari'      => $request->tgl_dari_dataklasifikasiiklim[$i],
                'tgl_sampai'    => $request->tgl_sampai_dataklasifikasiiklim[$i]
                ]);
            }
        }

        // data radiasi matahari
        $cek_dataradiasimatahari = $request->lokasi_dataradiasimatahari;
        if (isset($cek_dataradiasimatahari)){
            for($i = 0; $i < count($request->lokasi_dataradiasimatahari) ; $i++){
                $radiasimatahari = Datapermintaan::where('id', $request->id_df_dataradiasimatahari[$i]);
                $radiasimatahari->update([
                'lokasi'        => $request->lokasi_dataradiasimatahari[$i],
                'tgl_dari'      => $request->tgl_dari_dataradiasimatahari[$i],
                'tgl_sampai'    => $request->tgl_sampai_dataradiasimatahari[$i]
                ]);
            }
        }

        // unsur cuaca lainnya
        $cek_unsurcuacalainnya = $request->lokasi_unsurcuacalainnya;
        if (isset($cek_unsurcuacalainnya)){
            for($i = 0; $i < count($request->lokasi_unsurcuacalainnya) ; $i++){
                $unsurcuacalainnya = Datapermintaan::where('id', $request->id_df_unsurcuacalainnya[$i]);
                $unsurcuacalainnya->update([
                'unsurcuacalain'=> $request->deskripsi_unsurcuacalainnya,
                'lokasi'        => $request->lokasi_unsurcuacalainnya[$i],
                'tgl_dari'      => $request->tgl_dari_unsurcuacalainnya[$i],
                'tgl_sampai'    => $request->tgl_sampai_unsurcuacalainnya[$i]
                ]);
            }
        }
        return redirect('dashboard')->with('status', 'Data Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penanggulanganbencana  $penanggulanganbencana
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
