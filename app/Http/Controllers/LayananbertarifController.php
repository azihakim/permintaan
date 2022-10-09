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
            $layananbertarif->status_form = "1";
            $layananbertarif->nama = $data['nama'];
            $layananbertarif->telepon = $data['telepon'];
            $layananbertarif->email = $data['email'];
            $layananbertarif->surat_pengantar = $data['surat_pengantar'];
            $layananbertarif->deskripsi = $data['deskripsi'];
            $layananbertarif->save();
            
            // data petir
            if($request->exists("cb_datapetirs")){
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
            
            // data hari hujan
            if ($request->exists("cb_dataharihujans")){
                    $harihujan= count($request->lokasi_harihujan);
                    for($i = 0; $i < $harihujan ; $i++){
                        Datapermintaan::create([
                        'formulir_id'   => $layananbertarif->id,
                        'jenis_data'    => "data hari hujan",
                        'lokasi'        => $request->lokasi_harihujan[$i],
                        'tgl_dari'      => $request->tgl_dari_harihujan[$i],
                        'tgl_sampai'    => $request->tgl_sampai_harihujan[$i]
                        ]);
                    }
            }

            // data curah hujan rata-rata
            if ($request->exists("cb_datacurahhujanrataratas")){
                $curahhujanratarata= count($request->lokasi_curahhujanratarata);
                for($i = 0; $i < $curahhujanratarata ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data curah hujan rata-rata",
                    'lokasi'        => $request->lokasi_curahhujanratarata[$i],
                    'tgl_dari'      => $request->tgl_dari_curahhujanratarata[$i],
                    'tgl_sampai'    => $request->tgl_sampai_curahhujanratarata[$i]
                    ]);
                }
            }

            // data curah hujan maksimum
            if ($request->exists("cb_datacurahhujanmaksimums")){
                $curahhujanmaksimum= count($request->lokasi_curahhujanmaksimum);
                for($i = 0; $i < $curahhujanmaksimum ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data curah hujan maksimum",
                    'lokasi'        => $request->lokasi_curahhujanmaksimum[$i],
                    'tgl_dari'      => $request->tgl_dari_curahhujanmaksimum[$i],
                    'tgl_sampai'    => $request->tgl_sampai_curahhujanmaksimum[$i]
                    ]);
                }
            }

            // data curah hujan bulanan
            if ($request->exists("cb_datacurahhujanbulanans")){
                $curahhujanbulanan= count($request->lokasi_curahhujanbulanan);
                for($i = 0; $i < $curahhujanbulanan ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data curah hujan bulanan",
                    'lokasi'        => $request->lokasi_curahhujanbulanan[$i],
                    'tgl_dari'      => $request->tgl_dari_curahhujanbulanan[$i],
                    'tgl_sampai'    => $request->tgl_sampai_curahhujanbulanan[$i]
                    ]);
                }
            }

            // data suhu udara rata-rata
            if ($request->exists("cb_datasuhuudararataratas")){
                $suhuudararatarata= count($request->lokasi_suhuudararatarata);
                for($i = 0; $i < $suhuudararatarata ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data suhu udara rata-rata",
                    'lokasi'        => $request->lokasi_suhuudararatarata[$i],
                    'tgl_dari'      => $request->tgl_dari_suhuudararatarata[$i],
                    'tgl_sampai'    => $request->tgl_sampai_suhuudararatarata[$i]
                    ]);
                }
            }

            // data suhu udara maksimum
            if ($request->exists("cb_datasuhuudaramaksimums")){
                $suhuudaramaksimum= count($request->lokasi_suhuudaramaksimum);
                for($i = 0; $i < $suhuudaramaksimum ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data suhu udara maksimum",
                    'lokasi'        => $request->lokasi_suhuudaramaksimum[$i],
                    'tgl_dari'      => $request->tgl_dari_suhuudaramaksimum[$i],
                    'tgl_sampai'    => $request->tgl_sampai_suhuudaramaksimum[$i]
                    ]);
                }
            }

            // data suhu udara minimum
            if ($request->exists("cb_datasuhuudaraminimums")){
                $suhuudaraminimum= count($request->lokasi_suhuudaraminimum);
                for($i = 0; $i < $suhuudaraminimum ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data suhu udara minimum",
                    'lokasi'        => $request->lokasi_suhuudaraminimum[$i],
                    'tgl_dari'      => $request->tgl_dari_suhuudaraminimum[$i],
                    'tgl_sampai'    => $request->tgl_sampai_suhuudaraminimum[$i]
                    ]);
                }
            }

            // data kelembapan udara rata-rata
            if ($request->exists("cb_datakelembapanudararataratas")){
                $kelembapanudararatarata= count($request->lokasi_kelembapanudararatarata);
                for($i = 0; $i < $kelembapanudararatarata ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data kelembapan udara rata-rata",
                    'lokasi'        => $request->lokasi_kelembapanudararatarata[$i],
                    'tgl_dari'      => $request->tgl_dari_kelembapanudararatarata[$i],
                    'tgl_sampai'    => $request->tgl_sampai_kelembapanudararatarata[$i]
                    ]);
                }
            }

            // data kelembapan udara maksimum
            if ($request->exists("cb_datakelembapanudaramaksimums")){
                $kelembapanudaramaksimum= count($request->lokasi_kelembapanudaramaksimum);
                for($i = 0; $i < $kelembapanudaramaksimum ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data kelembapan udara maksimum",
                    'lokasi'        => $request->lokasi_kelembapanudaramaksimum[$i],
                    'tgl_dari'      => $request->tgl_dari_kelembapanudaramaksimum[$i],
                    'tgl_sampai'    => $request->tgl_sampai_kelembapanudaramaksimum[$i]
                    ]);
                }
            }

            // data kelembapan udara minimum
            if ($request->exists("cb_datakelembapanudaraminimums")){
                $kelembapanudaraminimum= count($request->lokasi_kelembapanudaraminimum);
                for($i = 0; $i < $kelembapanudaraminimum ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data kelembapan udara minimum",
                    'lokasi'        => $request->lokasi_kelembapanudaraminimum[$i],
                    'tgl_dari'      => $request->tgl_dari_kelembapanudaraminimum[$i],
                    'tgl_sampai'    => $request->tgl_sampai_kelembapanudaraminimum[$i]
                    ]);
                }
            }

            // data kecepatan dan arah angin
            if ($request->exists("cb_datakecepatandanarahangins")){
                $kecepatandanarahangin= count($request->lokasi_kecepatandanarahangin);
                for($i = 0; $i < $kecepatandanarahangin ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data kecepatan dan arah angin",
                    'lokasi'        => $request->lokasi_kecepatandanarahangin[$i],
                    'tgl_dari'      => $request->tgl_dari_kecepatandanarahangin[$i],
                    'tgl_sampai'    => $request->tgl_sampai_kecepatandanarahangin[$i]
                    ]);
                }
            }

            // data kecepatan angin maksimum
            if ($request->exists("cb_datakecepatananginmaksimums")){
                $kecepatananginmaksimum= count($request->lokasi_kecepatananginmaksimum);
                for($i = 0; $i < $kecepatananginmaksimum ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data kecepatan angin maksimum",
                    'lokasi'        => $request->lokasi_kecepatananginmaksimum[$i],
                    'tgl_dari'      => $request->tgl_dari_kecepatananginmaksimum[$i],
                    'tgl_sampai'    => $request->tgl_sampai_kecepatananginmaksimum[$i]
                    ]);
                }
            }

            // data lama penyinaran matahari
            if ($request->exists("cb_datalamapenyinaranmataharis")){
                $lamapenyinaranmatahari= count($request->lokasi_lamapenyinaranmatahari);
                for($i = 0; $i < $lamapenyinaranmatahari ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data lama penyinaran matahari",
                    'lokasi'        => $request->lokasi_lamapenyinaranmatahari[$i],
                    'tgl_dari'      => $request->tgl_dari_lamapenyinaranmatahari[$i],
                    'tgl_sampai'    => $request->tgl_sampai_lamapenyinaranmatahari[$i]
                    ]);
                }
            }

            // data prakiraan musim
            if ($request->exists("cb_dataprakiraanmusims")){
                $prakiraanmusim= count($request->lokasi_prakiraanmusim);
                for($i = 0; $i < $prakiraanmusim ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data prakiraan musim",
                    'lokasi'        => $request->lokasi_prakiraanmusim[$i],
                    'tgl_dari'      => $request->tgl_dari_prakiraanmusim[$i],
                    'tgl_sampai'    => $request->tgl_sampai_prakiraanmusim[$i]
                    ]);
                }
            }

            // data klasifikasi iklim
            if ($request->exists("cb_dataklasifikasiiklims")){
                $klasifikasiiklim= count($request->lokasi_klasifikasiiklim);
                for($i = 0; $i < $klasifikasiiklim ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data klasifikasi iklim",
                    'lokasi'        => $request->lokasi_klasifikasiiklim[$i],
                    'tgl_dari'      => $request->tgl_dari_klasifikasiiklim[$i],
                    'tgl_sampai'    => $request->tgl_sampai_klasifikasiiklim[$i]
                    ]);
                }
            }

            // data radiasi matahari
            if ($request->exists("cb_dataradiasimataharis")){
                $radiasimatahari= count($request->lokasi_radiasimatahari);
                for($i = 0; $i < $radiasimatahari ; $i++){
                    Datapermintaan::create([
                    'formulir_id'   => $layananbertarif->id,
                    'jenis_data'    => "data radiasi matahari",
                    'lokasi'        => $request->lokasi_radiasimatahari[$i],
                    'tgl_dari'      => $request->tgl_dari_radiasimatahari[$i],
                    'tgl_sampai'    => $request->tgl_sampai_radiasimatahari[$i]
                    ]);
                }
            }

            // unsur cuaca lainnya
            if ($request->exists("cb_unsurcuacalainnyas")){
                $unsurcuacalainnya= count($request->lokasi_unsurcuacalainnya);
                for($i = 0; $i < $unsurcuacalainnya ; $i++){
                    Datapermintaan::create([
                    'formulir_id'          => $layananbertarif->id,
                    'jenis_data'           => "unsur cuaca lainnya",
                    'unsurcuacalain'       => $request->deskripsi_unsurcuacalainnya,
                    'lokasi'               => $request->lokasi_unsurcuacalainnya[$i],
                    'tgl_dari'             => $request->tgl_dari_unsurcuacalainnya[$i],
                    'tgl_sampai'           => $request->tgl_sampai_unsurcuacalainnya[$i]
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
    public function edit($id)
    {
        //
        $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
        $formulir = Formulir::where("id", $id)->get();
        // dd($jenis_data);
        // return response()->json($data);
        return view('formulir.editLayananBertarif', compact('formulir', 'datapermintaan'));

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
