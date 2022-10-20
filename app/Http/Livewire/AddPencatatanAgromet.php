<?php

namespace App\Http\Livewire;

use App\Models\Angin;
use App\Models\Barometer;
use App\Models\Kondisi_cuaca_dan_tanah;
use App\Models\Open_pan;
use App\Models\Pencatatan;
use App\Models\Psychrometer_sangkar_meteorologi;
use App\Models\Radiasi;
use App\Models\Suhu_min_rumput;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AddPencatatanAgromet extends Component
{
    public $waktu1 = '07.01';
    public $waktu;
    public $tanggal;
    public $observer;

    public $idPencatatan;

    // Psychrometer Sangkar Meteorologi
    public $tbk11;
    public $tbb11;
    public $tbk12;
    public $tbb12;
    public $tbk13;
    public $tbb13;
    public $tbk14;
    public $tbb14;

    // Angin
    public $cup_counter11;
    public $cup_counter12;
    public $arah11;
    public $kecepatan11;
    public $arah12;
    public $kecepatan12;
    public $arah13;
    public $kecepatan13;

    // Open Pan
    public $h1;
    public $ev1;
    public $ch1;
    public $t1;
    public $max1;
    public $min1;

    // Barometer
    public $suhu1;
    public $barometer1;
    public $qfe1;
    public $qff1;

    // Kondisi Cuaca dan Tanah
    public $kode_tanah1;
    public $kode_cuaca1;

    // Suhu Min Rumput
    public $pembacaan1;
    public $reset1;

    // Radiasi
    public $i1;



    public function render()
    {
        return view('livewire.add-pencatatan-agromet',[
            'observers' => User::where('roles', 'observer')->get()
        ]);
    }

    public function storeForm1(){
        $this->validate([
            'observer' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu1,
            'users_id' => $this->observer
        ];

        Pencatatan::create($dataPencatatan);
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
        if (response()->json()->getStatusCode() >= 200 && response()->json()->getStatusCode() <=300) {
            $this->reset();
            $this->emit('dataStore');
            $this->dispatchBrowserEvent('alert', ['success'=>'Data Berhasil Disimpan!']);
        } else {
            $this->emit('dataFailure');
            $this->dispatchBrowserEvent('alert', ['success'=>'Data Berhasil Disimpan!']);
        }
    }
}
