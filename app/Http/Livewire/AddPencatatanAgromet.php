<?php

namespace App\Http\Livewire;

use App\Models\Angin;
use App\Models\Barometer;
use App\Models\Kondisi_cuaca_dan_tanah;
use App\Models\Open_pan;
use App\Models\Pencatatan;
use App\Models\Piche_evaporimeter;
use App\Models\Psychrometer_assmann;
use App\Models\Psychrometer_sangkar_meteorologi;
use App\Models\Radiasi;
use App\Models\Suhu_min_rumput;
use App\Models\Suhu_tanah;
use App\Models\Termometer_maksimum_dan_minimum;
use App\Models\User;
use Livewire\Component;

class AddPencatatanAgromet extends Component
{
    public $jenisForm;
    public $waktu1 = '07.01';
    public $waktu2 = '07.31';
    public $waktuHujan1 = '10.01';
    public $waktu3 = '13.01';
    public $waktu4 = '13.31';
    public $waktu5 = '14.01';
    public $waktuHujan2 = '16.01';
    public $waktu6 = '17.31';
    public $waktu7 = '18.01';
    public $waktuHujan3 = '19.01';
    public $tanggal;
    public $observer1;
    public $observer2;
    public $observer3;
    public $observer4;
    public $observer5;
    public $observer6;
    public $observer7;
    public $observerHujan1;
    public $observerHujan2;
    public $observerHujan3;

    public $idPencatatan;

    /* ---------- Form 1 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk11 = null;
    public $tbb11 = null;
    public $tbk12 = null;
    public $tbb12 = null;
    public $tbk13 = null;
    public $tbb13 = null;
    public $tbk14 = null;
    public $tbb14 = null;
    // Angin
    public $cup_counter11 = null;
    public $cup_counter12 = null;
    public $arah11 = null;
    public $kecepatan11 = null;
    public $arah12 = null;
    public $kecepatan12 = null;
    public $arah13 = null;
    public $kecepatan13 = null;
    // Open Pan
    public $h1 = null;
    public $ev1 = null;
    public $ch1 = null;
    public $t1 = null;
    public $max1 = null;
    public $min1 = null;
    // Barometer
    public $suhu1 = null;
    public $barometer1 = null;
    public $qfe1 = null;
    public $qff1 = null;
    // Kondisi Cuaca dan Tanah
    public $kode_tanah1 = null;
    public $kode_cuaca1 = null;
    // Suhu Min Rumput
    public $pembacaan1 = null;
    public $reset1 = null;
    // Radiasi
    public $i1 = null;
    /* ---------- End Form 1 ---------- */

    /* ---------- Form 2 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk21 = null;
    public $tbb21 = null;
    public $tbk22 = null;
    public $tbb22 = null;
    public $tbk23 = null;
    public $tbb23 = null;
    public $tbk24 = null;
    public $tbb24 = null;
    // Angin
    public $cup_counter21 = null;
    public $cup_counter22 = null;
    public $arah21 = null;
    public $kecepatan21 = null;
    public $arah22 = null;
    public $kecepatan22 = null;
    public $arah23 = null;
    public $kecepatan23 = null;
    // Open Pan
    public $h2_openpan = null;
    public $ev2_openpan = null;
    public $ch2 = null;
    public $t2 = null;
    public $max2 = null;
    public $min2 = null;
    // Psychrometer Assmann
    public $bb21 = null;
    public $bk21 = null;
    public $bb22 = null;
    public $bk22 = null;
    public $bb23 = null;
    public $bk23 = null;
    public $bb24 = null;
    public $bk24 = null;
    public $bb25 = null;
    public $bk25 = null;
    public $bb26 = null;
    public $bk26 = null;
    public $bb27 = null;
    public $bk27 = null;
    // Suhu Tanah
    public $berumput21 = null;
    public $gundul21 = null;
    public $berumput22 = null;
    public $gundul22 = null;
    public $berumput23 = null;
    public $gundul23 = null;
    public $berumput24 = null;
    public $gundul24 = null;
    public $berumput25 = null;
    public $gundul25 = null;
    public $berumput26 = null;
    public $gundul26 = null;
    public $berumput27 = null;
    public $gundul27 = null;
    // Piche Evaporimeter
    public $h2_piche = null;
    public $h22_piche = null;
    public $ev2_piche = null;
    /* ---------- End Form 2 ---------- */

        /* ---------- Form 3 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk31 = null;
    public $tbb31 = null;
    public $tbk32 = null;
    public $tbb32 = null;
    public $tbk33 = null;
    public $tbb33 = null;
    public $tbk34 = null;
    public $tbb34 = null;
    public $ch3 = null;
    /* ---------- End Form 3 ---------- */

    /* ---------- Form 4 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk41 = null;
    public $tbb41 = null;
    public $tbk42 = null;
    public $tbb42 = null;
    public $tbk43 = null;
    public $tbb43 = null;
    public $tbk44 = null;
    public $tbb44 = null;
    // Angin
    public $cup_counter41 = null;
    public $cup_counter42 = null;
    public $arah41 = null;
    public $kecepatan41 = null;
    public $arah42 = null;
    public $kecepatan42 = null;
    public $arah43 = null;
    public $kecepatan43 = null;
    // Open Pan
    public $h2_openpan4 = null;
    public $ev2_openpan4 = null;
    public $ch4 = null;
    public $t4 = null;
    public $max4 = null;
    public $min4 = null;
    // Psychrometer Assmann
    public $bb41 = null;
    public $bk41 = null;
    public $bb42 = null;
    public $bk42 = null;
    public $bb43 = null;
    public $bk43 = null;
    public $bb44 = null;
    public $bk44 = null;
    public $bb45 = null;
    public $bk45 = null;
    public $bb46 = null;
    public $bk46 = null;
    public $bb47 = null;
    public $bk47 = null;
    // Suhu Tanah
    public $berumput41 = null;
    public $gundul41 = null;
    public $berumput42 = null;
    public $gundul42 = null;
    public $berumput43 = null;
    public $gundul43 = null;
    public $berumput44 = null;
    public $gundul44 = null;
    public $berumput45 = null;
    public $gundul45 = null;
    public $berumput46 = null;
    public $gundul46 = null;
    public $berumput47 = null;
    public $gundul47 = null;
    // Piche Evaporimeter
    public $h2_piche4 = null;
    public $ev2_piche4 = null;
    /* ---------- End Form 4 ---------- */

    /* ---------- Form 5 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk51 = null;
    public $tbb51 = null;
    public $tbk52 = null;
    public $tbb52 = null;
    public $tbk53 = null;
    public $tbb53 = null;
    public $tbk54 = null;
    public $tbb54 = null;
    // Angin
    public $cup_counter51 = null;
    public $cup_counter52 = null;
    public $arah51 = null;
    public $kecepatan51 = null;
    public $arah52 = null;
    public $kecepatan52 = null;
    public $arah53 = null;
    public $kecepatan53 = null;
    // Suhu Tanah
    public $berumput51 = null;
    public $gundul51 = null;
    public $berumput52 = null;
    public $gundul52 = null;
    public $berumput53 = null;
    public $gundul53 = null;
    public $berumput54 = null;
    public $gundul54 = null;
    public $berumput55 = null;
    public $gundul55 = null;
    public $berumput56 = null;
    public $gundul56 = null;
    public $berumput57 = null;
    public $gundul57 = null;
    // Termometer Maksimum dan Minimum
    public $max51 = null;
    public $reset51 = null;
    public $max52 = null;
    public $reset52 = null;
    // Kondisi Cuaca dan Tanah
    public $kode_tanah5 = null;
    public $kode_cuaca5 = null;
    /* ---------- End Form 5 ---------- */

    /* ---------- Form 6 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk61 = null;
    public $tbb61 = null;
    public $tbk62 = null;
    public $tbb62 = null;
    public $tbk63 = null;
    public $tbb63 = null;
    public $tbk64 = null;
    public $tbb64 = null;
    // Angin
    public $cup_counter61 = null;
    public $cup_counter62 = null;
    public $arah61 = null;
    public $kecepatan61 = null;
    public $arah62 = null;
    public $kecepatan62 = null;
    public $arah63 = null;
    public $kecepatan63 = null;
    // Open Pan
    public $h2_openpan6 = null;
    public $ev2_openpan6 = null;
    public $ch6 = null;
    public $t6 = null;
    public $max6 = null;
    public $min6 = null;
    // Psychrometer Assmann
    public $bb61 = null;
    public $bk61 = null;
    public $bb62 = null;
    public $bk62 = null;
    public $bb63 = null;
    public $bk63 = null;
    public $bb64 = null;
    public $bk64 = null;
    public $bb65 = null;
    public $bk65 = null;
    public $bb66 = null;
    public $bk66 = null;
    public $bb67 = null;
    public $bk67 = null;
    // Suhu Tanah
    public $berumput61 = null;
    public $gundul61 = null;
    public $berumput62 = null;
    public $gundul62 = null;
    public $berumput63 = null;
    public $gundul63 = null;
    public $berumput64 = null;
    public $gundul64 = null;
    public $berumput65 = null;
    public $gundul65 = null;
    public $berumput66 = null;
    public $gundul66 = null;
    public $berumput67 = null;
    public $gundul67 = null;
    // Piche Evaporimeter
    public $h2_piche6 = null;
    public $ev2_piche6 = null;
    /* ---------- End Form 6 ---------- */

    /* ---------- Form 7 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk71 = null;
    public $tbb71 = null;
    public $tbk72 = null;
    public $tbb72 = null;
    public $tbk73 = null;
    public $tbb73 = null;
    public $tbk74 = null;
    public $tbb74 = null;
    // Angin
    public $cup_counter71 = null;
    public $cup_counter72 = null;
    public $arah71 = null;
    public $kecepatan71 = null;
    public $arah72 = null;
    public $kecepatan72 = null;
    public $arah73 = null;
    public $kecepatan73 = null;
    // Termometer Maksimum dan Minimum
    public $max71 = null;
    public $reset71 = null;
    public $max72 = null;
    public $reset72 = null;
    /* ---------- End Form 7 ---------- */

    /* ---------- Form Hujan ---------- */
    // Form Hujan 1
    public $ch_hujan1 = null;
    // Form Hujan 2
    public $ch_hujan2 = null;
    // Form Hujan 3
    public $ch_hujan3 = null;
    /* ---------- End Form Hujan ---------- */


    public function render()
    {
        return view('livewire.add-pencatatan-agromet',[
            'observers' => User::where('roles', 'observer')->get()
        ]);
    }

    public function storeForm1(){
        $this->validate([
            'observer1' => 'required',
            'tanggal' => 'required',
            'tbk11' => 'numeric|nullable',
            'tbb11' => 'numeric|nullable',
            'tbk12' => 'numeric|nullable',
            'tbb12' => 'numeric|nullable',
            'tbk13' => 'numeric|nullable',
            'tbb13' => 'numeric|nullable',
            'tbk14' => 'numeric|nullable',
            'tbb14' => 'numeric|nullable',
            'cup_counter11' => 'numeric|nullable',
            'cup_counter12' => 'numeric|nullable',
            'arah11' => 'numeric|nullable',
            'kecepatan11' => 'numeric|nullable',
            'arah12' => 'numeric|nullable',
            'kecepatan12' => 'numeric|nullable',
            'arah13' => 'numeric|nullable',
            'kecepatan13' => 'numeric|nullable',
            'h1' => 'numeric|nullable',
            'ev1' => 'numeric|nullable',
            'ch1' => 'numeric|nullable',
            't1' => 'numeric|nullable',
            'max1' => 'numeric|nullable',
            'min1' => 'numeric|nullable',
            'suhu1' => 'numeric|nullable',
            'barometer1' => 'numeric|nullable',
            'qfe1' => 'numeric|nullable',
            'qff1' => 'numeric|nullable',
            'kode_tanah1' => 'numeric|nullable',
            'kode_cuaca1' => 'numeric|nullable',
            'pembacaan1' => 'numeric|nullable',
            'reset1' => 'numeric|nullable',
            'i1' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu1,
            'users_id' => $this->observer1
        ];

        Pencatatan::create($dataPencatatan);
        // dd($simpan);
        $this->idPencatatan = Pencatatan::all()->last()->id;

        $dataPsychrometerSangkarMeteorologi = [
            'tbk1' => $this->tbk11,
            'tbb1' => $this->tbb11,
            'tbk2' => $this->tbk12,
            'tbb2' => $this->tbb12,
            'tbk3' => $this->tbk13,
            'tbb3' => $this->tbb13,
            'tbk4' => $this->tbk14,
            'tbb4' => $this->tbb14,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataAngin = [
            'cup_counter1' => $this->cup_counter11,
            'cup_counter2' => $this->cup_counter12,
            'arah1' => $this->arah11,
            'kecepatan1' => $this->kecepatan11,
            'arah2' => $this->arah12,
            'kecepatan2' => $this->kecepatan12,
            'arah3' => $this->arah13,
            'kecepatan3' => $this->kecepatan13,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataOpenPan = [
            'h' => $this->h1,
            'ev' => $this->ev1,
            'ch' => $this->ch1,
            't' => $this->t1,
            'max' => $this->max1,
            'min' => $this->min1,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataBarometer = [
            'suhu' => $this->suhu1,
            'barometer' => $this->barometer1,
            'qfe' => $this->qfe1,
            'qff' => $this->qff1,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataKondisiCuacaDanTanah = [
            'kode_tanah' => $this->kode_tanah1,
            'kode_cuaca' => $this->kode_cuaca1,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataSuhuMinRumput = [
            'pembacaan' => $this->pembacaan1,
            'reset' => $this->reset1,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataRadiasi = [
            'i' => $this->i1,
            'pencatatans_id' => $this->idPencatatan
        ];

        Psychrometer_sangkar_meteorologi::create($dataPsychrometerSangkarMeteorologi);
        Angin::create($dataAngin);
        Open_pan::create($dataOpenPan);
        Barometer::create($dataBarometer);
        Kondisi_cuaca_dan_tanah::create($dataKondisiCuacaDanTanah);
        Suhu_min_rumput::create($dataSuhuMinRumput);
        Radiasi::create($dataRadiasi);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form 07.01 Berhasil Disimpan!']);
    }

    public function storeForm2(){
        $this->validate([
            'observer2' => 'required',
            'tanggal' => 'required',
            'tbk21' => 'numeric|nullable',
            'tbb21' => 'numeric|nullable',
            'tbk22' => 'numeric|nullable',
            'tbb22' => 'numeric|nullable',
            'tbk23' => 'numeric|nullable',
            'tbb23' => 'numeric|nullable',
            'tbk24' => 'numeric|nullable',
            'tbb24' => 'numeric|nullable',
            'cup_counter21' => 'numeric|nullable',
            'cup_counter22' => 'numeric|nullable',
            'arah21' => 'numeric|nullable',
            'kecepatan21' => 'numeric|nullable',
            'arah22' => 'numeric|nullable',
            'kecepatan22' => 'numeric|nullable',
            'arah23' => 'numeric|nullable',
            'kecepatan23' => 'numeric|nullable',
            'h2_openpan' => 'numeric|nullable',
            'ev2_openpan' => 'numeric|nullable',
            'ch2' => 'numeric|nullable',
            't2' => 'numeric|nullable',
            'max2' => 'numeric|nullable',
            'min2' => 'numeric|nullable',
            'bb21' => 'numeric|nullable',
            'bk21' => 'numeric|nullable',
            'bb22' => 'numeric|nullable',
            'bk22' => 'numeric|nullable',
            'bb23' => 'numeric|nullable',
            'bk23' => 'numeric|nullable',
            'bb24' => 'numeric|nullable',
            'bk24' => 'numeric|nullable',
            'bb25' => 'numeric|nullable',
            'bk25' => 'numeric|nullable',
            'bb26' => 'numeric|nullable',
            'bk26' => 'numeric|nullable',
            'bb27' => 'numeric|nullable',
            'bk27' => 'numeric|nullable',
            'berumput21' => 'numeric|nullable',
            'gundul21' => 'numeric|nullable',
            'berumput22' => 'numeric|nullable',
            'gundul22' => 'numeric|nullable',
            'berumput23' => 'numeric|nullable',
            'gundul23' => 'numeric|nullable',
            'berumput24' => 'numeric|nullable',
            'gundul24' => 'numeric|nullable',
            'berumput25' => 'numeric|nullable',
            'gundul25' => 'numeric|nullable',
            'berumput26' => 'numeric|nullable',
            'gundul26' => 'numeric|nullable',
            'berumput27' => 'numeric|nullable',
            'gundul27' => 'numeric|nullable',
            'h2_piche' => 'numeric|nullable',
            'h22_piche' => 'numeric|nullable',
            'ev2_piche' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu2,
            'users_id' => $this->observer2
        ];

        Pencatatan::create($dataPencatatan);
        $this->idPencatatan = Pencatatan::all()->last()->id;

        $dataPsychrometerSangkarMeteorologi = [
            'tbk1' => $this->tbk21,
            'tbb1' => $this->tbb21,
            'tbk2' => $this->tbk22,
            'tbb2' => $this->tbb22,
            'tbk3' => $this->tbk23,
            'tbb3' => $this->tbb23,
            'tbk4' => $this->tbk24,
            'tbb4' => $this->tbb24,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataAngin = [
            'cup_counter1' => $this->cup_counter21,
            'cup_counter2' => $this->cup_counter22,
            'arah1' => $this->arah21,
            'kecepatan1' => $this->kecepatan21,
            'arah2' => $this->arah22,
            'kecepatan2' => $this->kecepatan22,
            'arah3' => $this->arah23,
            'kecepatan3' => $this->kecepatan23,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataOpenPan = [
            'h' => $this->h2_openpan,
            'ev' => $this->ev2_openpan,
            'ch' => $this->ch2,
            't' => $this->t2,
            'max' => $this->max2,
            'min' => $this->min2,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataPsychrometerAssmann = [
            'bb1' => $this->bb21,
            'bk1' => $this->bk21,
            'bb2' => $this->bb22,
            'bk2' => $this->bk22,
            'bb3' => $this->bb23,
            'bk3' => $this->bk23,
            'bb4' => $this->bb24,
            'bk4' => $this->bk24,
            'bb5' => $this->bb25,
            'bk5' => $this->bk25,
            'bb6' => $this->bb26,
            'bk6' => $this->bk26,
            'bb7' => $this->bb27,
            'bk7' => $this->bk27,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataSuhuTanah = [
            'berumput1' => $this->berumput21,
            'gundul1' => $this->gundul21,
            'berumput2' => $this->berumput22,
            'gundul2' => $this->gundul22,
            'berumput3' => $this->berumput23,
            'gundul3' => $this->gundul23,
            'berumput4' => $this->berumput24,
            'gundul4' => $this->gundul24,
            'berumput5' => $this->berumput25,
            'gundul5' => $this->gundul25,
            'berumput6' => $this->berumput26,
            'gundul6' => $this->gundul26,
            'berumput7' => $this->berumput27,
            'gundul7' => $this->gundul27,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataPicheEvaporimeter = [
            'h' => $this->h2_piche,
            'h2' => $this->h22_piche,
            'ev' => $this->ev2_piche,
            'pencatatans_id' => $this->idPencatatan
        ];

        Psychrometer_sangkar_meteorologi::create($dataPsychrometerSangkarMeteorologi);
        Angin::create($dataAngin);
        Open_pan::create($dataOpenPan);
        Psychrometer_assmann::create($dataPsychrometerAssmann);
        Suhu_tanah::create($dataSuhuTanah);
        Piche_evaporimeter::create($dataPicheEvaporimeter);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form 07.31 Berhasil Disimpan!']);
    }

    public function storeForm3(){
        $this->validate([
            'observer3' => 'required',
            'tanggal' => 'required',
            'tbk31' => 'numeric|nullable',
            'tbb31' => 'numeric|nullable',
            'tbk32' => 'numeric|nullable',
            'tbb32' => 'numeric|nullable',
            'tbk33' => 'numeric|nullable',
            'tbb33' => 'numeric|nullable',
            'tbk34' => 'numeric|nullable',
            'tbb34' => 'numeric|nullable',
            'ch3' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu3,
            'users_id' => $this->observer3
        ];

        Pencatatan::create($dataPencatatan);
        $this->idPencatatan = Pencatatan::all()->last()->id;

        $dataPsychrometerSangkarMeteorologi = [
            'tbk1' => $this->tbk31,
            'tbb1' => $this->tbb31,
            'tbk2' => $this->tbk32,
            'tbb2' => $this->tbb32,
            'tbk3' => $this->tbk33,
            'tbb3' => $this->tbb33,
            'tbk4' => $this->tbk34,
            'tbb4' => $this->tbb34,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataHujan = [
            'ch' => $this->ch3,
            'pencatatans_id' => $this->idPencatatan
        ];

        Psychrometer_sangkar_meteorologi::create($dataPsychrometerSangkarMeteorologi);
        Open_pan::create($dataHujan);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form 13.01 Berhasil Disimpan!']);
    }

    public function storeForm4(){
        $this->validate([
            'observer4' => 'required',
            'tanggal' => 'required',
            'tbk41' => 'numeric|nullable',
            'tbb41' => 'numeric|nullable',
            'tbk42' => 'numeric|nullable',
            'tbb42' => 'numeric|nullable',
            'tbk43' => 'numeric|nullable',
            'tbb43' => 'numeric|nullable',
            'tbk44' => 'numeric|nullable',
            'tbb44' => 'numeric|nullable',
            'cup_counter41' => 'numeric|nullable',
            'cup_counter42' => 'numeric|nullable',
            'arah41' => 'numeric|nullable',
            'kecepatan41' => 'numeric|nullable',
            'arah42' => 'numeric|nullable',
            'kecepatan42' => 'numeric|nullable',
            'arah43' => 'numeric|nullable',
            'kecepatan43' => 'numeric|nullable',
            'h2_openpan4' => 'numeric|nullable',
            'ev2_openpan4' => 'numeric|nullable',
            'ch4' => 'numeric|nullable',
            't4' => 'numeric|nullable',
            'max4' => 'numeric|nullable',
            'min4' => 'numeric|nullable',
            'bb41' => 'numeric|nullable',
            'bk41' => 'numeric|nullable',
            'bb42' => 'numeric|nullable',
            'bk42' => 'numeric|nullable',
            'bb43' => 'numeric|nullable',
            'bk43' => 'numeric|nullable',
            'bb44' => 'numeric|nullable',
            'bk44' => 'numeric|nullable',
            'bb45' => 'numeric|nullable',
            'bk45' => 'numeric|nullable',
            'bb46' => 'numeric|nullable',
            'bk46' => 'numeric|nullable',
            'bb47' => 'numeric|nullable',
            'bk47' => 'numeric|nullable',
            'berumput41' => 'numeric|nullable',
            'gundul41' => 'numeric|nullable',
            'berumput42' => 'numeric|nullable',
            'gundul42' => 'numeric|nullable',
            'berumput43' => 'numeric|nullable',
            'gundul43' => 'numeric|nullable',
            'berumput44' => 'numeric|nullable',
            'gundul44' => 'numeric|nullable',
            'berumput45' => 'numeric|nullable',
            'gundul45' => 'numeric|nullable',
            'berumput46' => 'numeric|nullable',
            'gundul46' => 'numeric|nullable',
            'berumput47' => 'numeric|nullable',
            'gundul47' => 'numeric|nullable',
            'h2_piche4' => 'numeric|nullable',
            'ev2_piche4' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu4,
            'users_id' => $this->observer4
        ];

        Pencatatan::create($dataPencatatan);
        $this->idPencatatan = Pencatatan::all()->last()->id;

        $dataPsychrometerSangkarMeteorologi = [
            'tbk1' => $this->tbk41,
            'tbb1' => $this->tbb41,
            'tbk2' => $this->tbk42,
            'tbb2' => $this->tbb42,
            'tbk3' => $this->tbk43,
            'tbb3' => $this->tbb43,
            'tbk4' => $this->tbk44,
            'tbb4' => $this->tbb44,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataAngin = [
            'cup_counter1' => $this->cup_counter41,
            'cup_counter2' => $this->cup_counter42,
            'arah1' => $this->arah41,
            'kecepatan1' => $this->kecepatan41,
            'arah2' => $this->arah42,
            'kecepatan2' => $this->kecepatan42,
            'arah3' => $this->arah43,
            'kecepatan3' => $this->kecepatan43,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataOpenPan = [
            'h' => $this->h2_openpan4,
            'ev' => $this->ev2_openpan4,
            'ch' => $this->ch4,
            't' => $this->t4,
            'max' => $this->max4,
            'min' => $this->min4,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataPsychrometerAssmann = [
            'bb1' => $this->bb41,
            'bk1' => $this->bk41,
            'bb2' => $this->bb42,
            'bk2' => $this->bk42,
            'bb3' => $this->bb43,
            'bk3' => $this->bk43,
            'bb4' => $this->bb44,
            'bk4' => $this->bk44,
            'bb5' => $this->bb45,
            'bk5' => $this->bk45,
            'bb6' => $this->bb46,
            'bk6' => $this->bk46,
            'bb7' => $this->bb47,
            'bk7' => $this->bk47,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataSuhuTanah = [
            'berumput1' => $this->berumput41,
            'gundul1' => $this->gundul41,
            'berumput2' => $this->berumput42,
            'gundul2' => $this->gundul42,
            'berumput3' => $this->berumput43,
            'gundul3' => $this->gundul43,
            'berumput4' => $this->berumput44,
            'gundul4' => $this->gundul44,
            'berumput5' => $this->berumput45,
            'gundul5' => $this->gundul45,
            'berumput6' => $this->berumput46,
            'gundul6' => $this->gundul46,
            'berumput7' => $this->berumput47,
            'gundul7' => $this->gundul47,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataPicheEvaporimeter = [
            'h' => $this->h2_piche4,
            'ev' => $this->ev2_piche4,
            'pencatatans_id' => $this->idPencatatan
        ];

        Psychrometer_sangkar_meteorologi::create($dataPsychrometerSangkarMeteorologi);
        Angin::create($dataAngin);
        Open_pan::create($dataOpenPan);
        Psychrometer_assmann::create($dataPsychrometerAssmann);
        Suhu_tanah::create($dataSuhuTanah);
        Piche_evaporimeter::create($dataPicheEvaporimeter);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form 13.31 Berhasil Disimpan!']);
    }

    public function storeForm5(){
        $this->validate([
            'observer5' => 'required',
            'tanggal' => 'required',
            'tbk51' => 'numeric|nullable',
            'tbb51' => 'numeric|nullable',
            'tbk52' => 'numeric|nullable',
            'tbb52' => 'numeric|nullable',
            'tbk53' => 'numeric|nullable',
            'tbb53' => 'numeric|nullable',
            'tbk54' => 'numeric|nullable',
            'tbb54' => 'numeric|nullable',
            'cup_counter51' => 'numeric|nullable',
            'cup_counter52' => 'numeric|nullable',
            'arah51' => 'numeric|nullable',
            'kecepatan51' => 'numeric|nullable',
            'arah52' => 'numeric|nullable',
            'kecepatan52' => 'numeric|nullable',
            'arah53' => 'numeric|nullable',
            'kecepatan53' => 'numeric|nullable',
            'berumput51' => 'numeric|nullable',
            'gundul51' => 'numeric|nullable',
            'berumput52' => 'numeric|nullable',
            'gundul52' => 'numeric|nullable',
            'berumput53' => 'numeric|nullable',
            'gundul53' => 'numeric|nullable',
            'berumput54' => 'numeric|nullable',
            'gundul54' => 'numeric|nullable',
            'berumput55' => 'numeric|nullable',
            'gundul55' => 'numeric|nullable',
            'berumput56' => 'numeric|nullable',
            'gundul56' => 'numeric|nullable',
            'berumput57' => 'numeric|nullable',
            'gundul57' => 'numeric|nullable',
            'max51' => 'numeric|nullable',
            'reset51' => 'numeric|nullable',
            'max52' => 'numeric|nullable',
            'reset52' => 'numeric|nullable',
            'kode_tanah5' => 'numeric|nullable',
            'kode_cuaca5' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu5,
            'users_id' => $this->observer5
        ];

        Pencatatan::create($dataPencatatan);
        $this->idPencatatan = Pencatatan::all()->last()->id;

        $dataPsychrometerSangkarMeteorologi = [
            'tbk1' => $this->tbk51,
            'tbb1' => $this->tbb51,
            'tbk2' => $this->tbk52,
            'tbb2' => $this->tbb52,
            'tbk3' => $this->tbk53,
            'tbb3' => $this->tbb53,
            'tbk4' => $this->tbk54,
            'tbb4' => $this->tbb54,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataAngin = [
            'cup_counter1' => $this->cup_counter51,
            'cup_counter2' => $this->cup_counter52,
            'arah1' => $this->arah51,
            'kecepatan1' => $this->kecepatan51,
            'arah2' => $this->arah52,
            'kecepatan2' => $this->kecepatan52,
            'arah3' => $this->arah53,
            'kecepatan3' => $this->kecepatan53,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataSuhuTanah = [
            'berumput1' => $this->berumput51,
            'gundul1' => $this->gundul51,
            'berumput2' => $this->berumput52,
            'gundul2' => $this->gundul52,
            'berumput3' => $this->berumput53,
            'gundul3' => $this->gundul53,
            'berumput4' => $this->berumput54,
            'gundul4' => $this->gundul54,
            'berumput5' => $this->berumput55,
            'gundul5' => $this->gundul55,
            'berumput6' => $this->berumput56,
            'gundul6' => $this->gundul56,
            'berumput7' => $this->berumput57,
            'gundul7' => $this->gundul57,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataTermometerMaksimumDanMinimum = [
            'max1' => $this->max51,
            'reset1' => $this->reset51,
            'max2' => $this->max52,
            'reset2' => $this->reset52,
            'pencatatans_id' => $this->idPencatatan
        ];

         $dataKondisiCuacaDanTanah = [
            'kode_tanah' => $this->kode_tanah5,
            'kode_cuaca' => $this->kode_cuaca5,
            'pencatatans_id' => $this->idPencatatan
        ];

        Psychrometer_sangkar_meteorologi::create($dataPsychrometerSangkarMeteorologi);
        Angin::create($dataAngin);
        Suhu_tanah::create($dataSuhuTanah);
        Termometer_maksimum_dan_minimum::create($dataTermometerMaksimumDanMinimum);
        Kondisi_cuaca_dan_tanah::create($dataKondisiCuacaDanTanah);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form 14.01 Berhasil Disimpan!']);
    }

    public function storeForm6(){
        $this->validate([
            'observer6' => 'required',
            'tanggal' => 'required',
            'tbk61' => 'numeric|nullable',
            'tbb61' => 'numeric|nullable',
            'tbk62' => 'numeric|nullable',
            'tbb62' => 'numeric|nullable',
            'tbk63' => 'numeric|nullable',
            'tbb63' => 'numeric|nullable',
            'tbk64' => 'numeric|nullable',
            'tbb64' => 'numeric|nullable',
            'cup_counter61' => 'numeric|nullable',
            'cup_counter62' => 'numeric|nullable',
            'arah61' => 'numeric|nullable',
            'kecepatan61' => 'numeric|nullable',
            'arah62' => 'numeric|nullable',
            'kecepatan62' => 'numeric|nullable',
            'arah63' => 'numeric|nullable',
            'kecepatan63' => 'numeric|nullable',
            'h2_openpan6' => 'numeric|nullable',
            'ev2_openpan6' => 'numeric|nullable',
            'ch6' => 'numeric|nullable',
            't6' => 'numeric|nullable',
            'max6' => 'numeric|nullable',
            'min6' => 'numeric|nullable',
            'bb61' => 'numeric|nullable',
            'bk61' => 'numeric|nullable',
            'bb62' => 'numeric|nullable',
            'bk62' => 'numeric|nullable',
            'bb63' => 'numeric|nullable',
            'bk63' => 'numeric|nullable',
            'bb64' => 'numeric|nullable',
            'bk64' => 'numeric|nullable',
            'bb65' => 'numeric|nullable',
            'bk65' => 'numeric|nullable',
            'bb66' => 'numeric|nullable',
            'bk66' => 'numeric|nullable',
            'bb67' => 'numeric|nullable',
            'bk67' => 'numeric|nullable',
            'berumput61' => 'numeric|nullable',
            'gundul61' => 'numeric|nullable',
            'berumput62' => 'numeric|nullable',
            'gundul62' => 'numeric|nullable',
            'berumput63' => 'numeric|nullable',
            'gundul63' => 'numeric|nullable',
            'berumput64' => 'numeric|nullable',
            'gundul64' => 'numeric|nullable',
            'berumput65' => 'numeric|nullable',
            'gundul65' => 'numeric|nullable',
            'berumput66' => 'numeric|nullable',
            'gundul66' => 'numeric|nullable',
            'berumput67' => 'numeric|nullable',
            'gundul67' => 'numeric|nullable',
            'h2_piche6' => 'numeric|nullable',
            'ev2_piche6' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu6,
            'users_id' => $this->observer6
        ];

        Pencatatan::create($dataPencatatan);
        $this->idPencatatan = Pencatatan::all()->last()->id;

        $dataPsychrometerSangkarMeteorologi = [
            'tbk1' => $this->tbk61,
            'tbb1' => $this->tbb61,
            'tbk2' => $this->tbk62,
            'tbb2' => $this->tbb62,
            'tbk3' => $this->tbk63,
            'tbb3' => $this->tbb63,
            'tbk4' => $this->tbk64,
            'tbb4' => $this->tbb64,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataAngin = [
            'cup_counter1' => $this->cup_counter61,
            'cup_counter2' => $this->cup_counter62,
            'arah1' => $this->arah61,
            'kecepatan1' => $this->kecepatan61,
            'arah2' => $this->arah62,
            'kecepatan2' => $this->kecepatan62,
            'arah3' => $this->arah63,
            'kecepatan3' => $this->kecepatan63,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataOpenPan = [
            'h' => $this->h2_openpan6,
            'ev' => $this->ev2_openpan6,
            'ch' => $this->ch6,
            't' => $this->t6,
            'max' => $this->max6,
            'min' => $this->min6,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataPsychrometerAssmann = [
            'bb1' => $this->bb61,
            'bk1' => $this->bk61,
            'bb2' => $this->bb62,
            'bk2' => $this->bk62,
            'bb3' => $this->bb63,
            'bk3' => $this->bk63,
            'bb4' => $this->bb64,
            'bk4' => $this->bk64,
            'bb5' => $this->bb65,
            'bk5' => $this->bk65,
            'bb6' => $this->bb66,
            'bk6' => $this->bk66,
            'bb7' => $this->bb67,
            'bk7' => $this->bk67,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataSuhuTanah = [
            'berumput1' => $this->berumput61,
            'gundul1' => $this->gundul61,
            'berumput2' => $this->berumput62,
            'gundul2' => $this->gundul62,
            'berumput3' => $this->berumput63,
            'gundul3' => $this->gundul63,
            'berumput4' => $this->berumput64,
            'gundul4' => $this->gundul64,
            'berumput5' => $this->berumput65,
            'gundul5' => $this->gundul65,
            'berumput6' => $this->berumput66,
            'gundul6' => $this->gundul66,
            'berumput7' => $this->berumput67,
            'gundul7' => $this->gundul67,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataPicheEvaporimeter = [
            'h' => $this->h2_piche6,
            'ev' => $this->ev2_piche6,
            'pencatatans_id' => $this->idPencatatan
        ];

        Psychrometer_sangkar_meteorologi::create($dataPsychrometerSangkarMeteorologi);
        Angin::create($dataAngin);
        Open_pan::create($dataOpenPan);
        Psychrometer_assmann::create($dataPsychrometerAssmann);
        Suhu_tanah::create($dataSuhuTanah);
        Piche_evaporimeter::create($dataPicheEvaporimeter);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form 17.31 Berhasil Disimpan!']);
    }

    public function storeForm7(){
        $this->validate([
            'observer7' => 'required',
            'tanggal' => 'required',
            'tbk71' => 'numeric|nullable',
            'tbb71' => 'numeric|nullable',
            'tbk72' => 'numeric|nullable',
            'tbb72' => 'numeric|nullable',
            'tbk73' => 'numeric|nullable',
            'tbb73' => 'numeric|nullable',
            'tbk74' => 'numeric|nullable',
            'tbb74' => 'numeric|nullable',
            'cup_counter71' => 'numeric|nullable',
            'cup_counter72' => 'numeric|nullable',
            'arah71' => 'numeric|nullable',
            'kecepatan71' => 'numeric|nullable',
            'arah72' => 'numeric|nullable',
            'kecepatan72' => 'numeric|nullable',
            'arah73' => 'numeric|nullable',
            'kecepatan73' => 'numeric|nullable',
            'max71' => 'numeric|nullable',
            'reset71' => 'numeric|nullable',
            'max72' => 'numeric|nullable',
            'reset72' => 'numeric|nullable',
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu7,
            'users_id' => $this->observer7
        ];

        Pencatatan::create($dataPencatatan);
        $this->idPencatatan = Pencatatan::all()->last()->id;

        $dataPsychrometerSangkarMeteorologi = [
            'tbk1' => $this->tbk71,
            'tbb1' => $this->tbb71,
            'tbk2' => $this->tbk72,
            'tbb2' => $this->tbb72,
            'tbk3' => $this->tbk73,
            'tbb3' => $this->tbb73,
            'tbk4' => $this->tbk74,
            'tbb4' => $this->tbb74,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataAngin = [
            'cup_counter1' => $this->cup_counter71,
            'cup_counter2' => $this->cup_counter72,
            'arah1' => $this->arah71,
            'kecepatan1' => $this->kecepatan71,
            'arah2' => $this->arah72,
            'kecepatan2' => $this->kecepatan72,
            'arah3' => $this->arah73,
            'kecepatan3' => $this->kecepatan73,
            'pencatatans_id' => $this->idPencatatan
        ];

        $dataTermometerMaksimumDanMinimum = [
            'max1' => $this->max71,
            'reset1' => $this->reset71,
            'max2' => $this->max72,
            'reset2' => $this->reset72,
            'pencatatans_id' => $this->idPencatatan
        ];

        Psychrometer_sangkar_meteorologi::create($dataPsychrometerSangkarMeteorologi);
        Angin::create($dataAngin);
        Termometer_maksimum_dan_minimum::create($dataTermometerMaksimumDanMinimum);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form 18.01 Berhasil Disimpan!']);
    }

    public function storeFormHujan1(){
        $this->validate([
            'observerHujan1' => 'required',
            'tanggal' => 'required',
            'ch_hujan1' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktuHujan1,
            'users_id' => $this->observerHujan1
        ];

        Pencatatan::create($dataPencatatan);
        $this->idPencatatan = Pencatatan::all()->last()->id;

        $dataHujan = [
            'ch' => $this->ch_hujan1,
            'pencatatans_id' => $this->idPencatatan
        ];

        Open_pan::create($dataHujan);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form 10.01 Berhasil Disimpan!']);
    }

    public function storeFormHujan2(){
        $this->validate([
            'observerHujan2' => 'required',
            'tanggal' => 'required',
            'ch_hujan2' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktuHujan2,
            'users_id' => $this->observerHujan2
        ];

        Pencatatan::create($dataPencatatan);
        $this->idPencatatan = Pencatatan::all()->last()->id;

        $dataHujan = [
            'ch' => $this->ch_hujan2,
            'pencatatans_id' => $this->idPencatatan
        ];

        Open_pan::create($dataHujan);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form 16.01 Berhasil Disimpan!']);
    }

    public function storeFormHujan3(){
        $this->validate([
            'observerHujan3' => 'required',
            'tanggal' => 'required',
            'ch_hujan3' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktuHujan3,
            'users_id' => $this->observerHujan3
        ];

        Pencatatan::create($dataPencatatan);
        $this->idPencatatan = Pencatatan::all()->last()->id;

        $dataHujan = [
            'ch' => $this->ch_hujan3,
            'pencatatans_id' => $this->idPencatatan
        ];

        Open_pan::create($dataHujan);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form 19.01 Berhasil Disimpan!']);
    }
}
