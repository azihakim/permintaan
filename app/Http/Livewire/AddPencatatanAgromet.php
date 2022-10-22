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
            'tanggal' => 'required'
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
}
