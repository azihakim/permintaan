<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Layananbertarif;
use App\Models\Formulir;
use App\Models\Datapermintaan;
use App\Policies\FormulirPolicy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

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

            $ext = $request->surat_pengantar->getClientOriginalExtension();
            $file = "surat_pengantar-".time().".".$ext;
            $request->surat_pengantar->storeAs('public/dokumen', $file);
            $layananbertarif = new Formulir();
            $layananbertarif->jenis_permintaan = "Layanan bertarif";
            $layananbertarif->status_form = "1";
            $layananbertarif->user_id =$request->user()->id;
            $layananbertarif->surat_pengantar = $file;
            $layananbertarif->deskripsi = $data['deskripsi'];
            $layananbertarif->save();
            
            // data petir
            if($request->exists("cb_datapetirs")){
                $petir = count($request->lokasi_petir);
                    for($i = 0; $i < $petir ; $i++){
                        Datapermintaan::create([
                                'formulir_id'   => $layananbertarif->id,
                                'jenis_data'    => 'datapetir',
                                'lokasi'        => $request->lokasi_petir[$i],
                                'desk_petir' => $request->desk_petir,
                                // 'latitude'      => $request->latitude_petir[$i],
                                // 'longitude'     => $request->longitude_petir[$i],
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
                        'jenis_data'    => "dataharihujan",
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
                    'jenis_data'    => "datacurahhujanratarata",
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
                    'jenis_data'    => "datacurahhujanmaksimum",
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
                    'jenis_data'    => "datacurahhujanbulanan",
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
                    'jenis_data'    => "datasuhuudararatarata",
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
                    'jenis_data'    => "datasuhuudaramaksimum",
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
                    'jenis_data'    => "datasuhuudaraminimum",
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
                    'jenis_data'    => "datakelembapanudararatarata",
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
                    'jenis_data'    => "datakelembapanudaramaksimum",
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
                    'jenis_data'    => "datakelembapanudaraminimum",
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
                    'jenis_data'    => "datakecepatandanarahangin",
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
                    'jenis_data'    => "datakecepatananginmaksimum",
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
                    'jenis_data'    => "datalamapenyinaranmatahari",
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
                    'jenis_data'    => "dataprakiraanmusim",
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
                    'jenis_data'    => "dataklasifikasiiklim",
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
                    'jenis_data'    => "dataradiasimatahari",
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
                    'jenis_data'           => "unsurcuacalainnya",
                    'unsurcuacalain'       => $request->deskripsi_unsurcuacalainnya,
                    'lokasi'               => $request->lokasi_unsurcuacalainnya[$i],
                    'tgl_dari'             => $request->tgl_dari_unsurcuacalainnya[$i],
                    'tgl_sampai'           => $request->tgl_sampai_unsurcuacalainnya[$i]
                    ]);
                }
            }

            
            return redirect('dashboard')->with('status', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layananbertarif  $layananbertarif
     * @return \Illuminate\Http\Response
     */
    public function show(Layananbertarif $layananbertarif, Datapermintaan $datapermintaan, $id)
    {
        
        $formulir = Formulir::find($id);
        $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
        return view('formulir.showLayananBertarif', compact('formulir', 'datapermintaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layananbertarif  $layananbertarif
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Datapermintaan $datapermintaan, Formulir $formulir)
    {
        // $this->authorize('view', $formulir);
        $formulir = Formulir::find($id);
        $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
        return view('formulir.editLayananBertarif', compact('formulir', 'datapermintaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layananbertarif  $layananbertarif
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
        // $data = $request->all();
        // dd($data);  
        $formulir->save();
        
        // data petir
        $cek_datapetir = $request->lokasi_datapetir;
        if (isset($cek_datapetir)){
            for($i = 0; $i < count($request->lokasi_datapetir) ; $i++){
                $petir = Datapermintaan::where('id', $request->id_df_datapetir[$i]);
                $petir->update([
                            'lokasi'        => $request->lokasi_datapetir[$i],
                            'desk_petir' => $request->deskripsi_datapetir,
                            // 'latitude'      => $request->latitude_datapetir[$i],
                            // 'longitude'     => $request->longitude_datapetir[$i],
                            'tgl_dari'      => $request->tgl_dari_datapetir[$i],
                            'tgl_sampai'    => $request->tgl_sampai_datapetir[$i]
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
     * @param  \App\Models\Layananbertarif  $layananbertarif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layananbertarif $layananbertarif, $id)
    {
        Formulir::find($id)->delete();
        Datapermintaan::where("formulir_id", $id)->delete();
        return redirect()->back();
    }

}
