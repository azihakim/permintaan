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
use Livewire\Component;
use Livewire\WithPagination;

class TabelPencatatanAgromet extends Component
{
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

    // Pagination
    use WithPagination;
    protected $listeners = ['dataStore' => 'render'];

    // Filter Tabel
    public $filterWaktu;
    public $filterTanggal;
    public $filterObserver;
    // public $dataPencatatan;
    public $clearFilter = false;
    public function render()
    {
        if ($this->filterWaktu != null && $this->filterTanggal != null && $this->filterObserver != null) {
            $dataPencatatan = Pencatatan::where([
                ['tanggal', $this->filterTanggal],
                ['waktu', $this->filterWaktu],
                ['users_id', $this->filterObserver]
            ])->orderBy('id','desc')->paginate(5);
            $this->clearFilter = true;
        } else if ($this->filterWaktu != null && $this->filterTanggal != null){
            $dataPencatatan = Pencatatan::where([
                ['tanggal', $this->filterTanggal],
                ['waktu', $this->filterWaktu]
            ])->orderBy('id','desc')->paginate(5);
            $this->clearFilter = true;
        } else if ($this->filterWaktu != null && $this->filterObserver != null){
            $dataPencatatan = Pencatatan::where([
                ['waktu', $this->filterWaktu],
                ['users_id', $this->filterObserver]
            ])->orderBy('id','desc')->paginate(5);
            $this->clearFilter = true;
        } else if ($this->filterObserver != null && $this->filterTanggal != null){
            $dataPencatatan = Pencatatan::where([
                ['tanggal', $this->filterTanggal],
                ['users_id', $this->filterObserver]
            ])->orderBy('id','desc')->paginate(5);
            $this->clearFilter = true;
        } else if ($this->filterTanggal != null) {
            $dataPencatatan = Pencatatan::where(
                'tanggal', $this->filterTanggal)
                ->orderBy('id','desc')->paginate(5);
            $this->clearFilter = true;
        } else if ($this->filterWaktu != null) {
            $dataPencatatan = Pencatatan::where(
                'waktu', $this->filterWaktu)
                ->orderBy('id','desc')->paginate(5);
            $this->clearFilter = true;
        } else if ($this->filterObserver != null) {
            $dataPencatatan = Pencatatan::where('users_id', $this->filterObserver)
            ->orderBy('id','desc')->paginate(5);
            $this->clearFilter = true;
        }
        else {
            $dataPencatatan = Pencatatan::orderBy('id','desc')->paginate(5);
        }
        // dd($dataPencatatan);

        return view('livewire.tabel-pencatatan-agromet',[
            'pencatatan' => $dataPencatatan,
            'observers' => User::where('roles', 'observer')->get(),
            'clearFilter' => $this->clearFilter
        ]);
    }

    public function clear(){
        $this->clearFilter = false;
        $this->filterWaktu = null;
        $this->filterTanggal = null;
        $this->filterObserver = null;
    }

    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }

    public function editForm1($pencatatan_id){
        $observer = Pencatatan::where('id', $pencatatan_id)->get()->first()->users->id;
        $dataPsychrometerSangkarMeteorologi =  Psychrometer_sangkar_meteorologi::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataAngin = Angin::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataOpenPan = Open_pan::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataBarometer = Barometer::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataKondisiCuacaDanTanah = Kondisi_cuaca_dan_tanah::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataSuhuMinRumput = Suhu_min_rumput::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataRadiasi = Radiasi::where("pencatatans_id", $pencatatan_id)->get()->first();

        // dd($dataPsychrometerSangkarMeteorologi->tbk1);
        $this->observer1 = $observer;
        $this->tbk11 = $dataPsychrometerSangkarMeteorologi->tbk1;
        $this->tbb11 = $dataPsychrometerSangkarMeteorologi->tbb1;
        $this->tbk12 = $dataPsychrometerSangkarMeteorologi->tbk2;
        $this->tbb12 = $dataPsychrometerSangkarMeteorologi->tbb2;
        $this->tbk13 = $dataPsychrometerSangkarMeteorologi->tbk3;
        $this->tbb13 = $dataPsychrometerSangkarMeteorologi->tbb3;
        $this->tbk14 = $dataPsychrometerSangkarMeteorologi->tbk4;
        $this->tbb14 = $dataPsychrometerSangkarMeteorologi->tbb4;

        $this->cup_counter11 = $dataAngin->cup_counter1;
        $this->cup_counter12 = $dataAngin->cup_counter2;
        $this->arah11 = $dataAngin->arah1;
        $this->kecepatan11 = $dataAngin->kecepatan1;
        $this->arah12 = $dataAngin->arah2;
        $this->kecepatan12 = $dataAngin->kecepatan2;
        $this->arah13 = $dataAngin->arah3;
        $this->kecepatan13 = $dataAngin->kecepatan3;

        $this->h1 = $dataOpenPan->h;
        $this->ev1 = $dataOpenPan->ev;
        $this->ch1 = $dataOpenPan->ch;
        $this->t1 = $dataOpenPan->t;
        $this->max1 = $dataOpenPan->max;
        $this->min1 = $dataOpenPan->min;

        $this->suhu1 = $dataBarometer->suhu;
        $this->barometer1 = $dataBarometer->barometer;
        $this->qfe1 = $dataBarometer->qfe;
        $this->qff1 = $dataBarometer->qff;

        $this->kode_tanah1 = $dataKondisiCuacaDanTanah->kode_tanah;
        $this->kode_cuaca1 = $dataKondisiCuacaDanTanah->kode_cuaca;

        $this->pembacaan1 = $dataSuhuMinRumput->pembacaan;
        $this->reset1 = $dataSuhuMinRumput->reset;

        $this->i1 = $dataRadiasi->i;
    }
}
