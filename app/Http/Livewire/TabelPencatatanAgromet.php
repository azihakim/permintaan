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

    /* ---------- Form 2 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk21 = 0;
    public $tbb21 = 0;
    public $tbk22 = 0;
    public $tbb22 = 0;
    public $tbk23 = 0;
    public $tbb23 = 0;
    public $tbk24 = 0;
    public $tbb24 = 0;
    // Angin
    public $cup_counter21 = 0;
    public $cup_counter22 = 0;
    public $arah21 = 0;
    public $kecepatan21 = 0;
    public $arah22 = 0;
    public $kecepatan22 = 0;
    public $arah23 = 0;
    public $kecepatan23 = 0;
    // Open Pan
    public $h2_openpan = 0;
    public $ev2_openpan = 0;
    public $ch2 = 0;
    public $t2 = 0;
    public $max2 = 0;
    public $min2 = 0;
    // Psychrometer Assmann
    public $bb21 = 0;
    public $bk21 = 0;
    public $bb22 = 0;
    public $bk22 = 0;
    public $bb23 = 0;
    public $bk23 = 0;
    public $bb24 = 0;
    public $bk24 = 0;
    public $bb25 = 0;
    public $bk25 = 0;
    public $bb26 = 0;
    public $bk26 = 0;
    public $bb27 = 0;
    public $bk27 = 0;
    // Suhu Tanah
    public $berumput21 = 0;
    public $gundul21 = 0;
    public $berumput22 = 0;
    public $gundul22 = 0;
    public $berumput23 = 0;
    public $gundul23 = 0;
    public $berumput24 = 0;
    public $gundul24 = 0;
    public $berumput25 = 0;
    public $gundul25 = 0;
    public $berumput26 = 0;
    public $gundul26 = 0;
    public $berumput27 = 0;
    public $gundul27 = 0;
    // Piche Evaporimeter
    public $h2_piche = 0;
    public $h22_piche = 0;
    public $ev2_piche = 0;
    /* ---------- End Form 2 ---------- */

    /* ---------- Form 3 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk31 = 0;
    public $tbb31 = 0;
    public $tbk32 = 0;
    public $tbb32 = 0;
    public $tbk33 = 0;
    public $tbb33 = 0;
    public $tbk34 = 0;
    public $tbb34 = 0;
    public $ch3 = 0;
    /* ---------- End Form 3 ---------- */

    /* ---------- Form 4 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk41 = 0;
    public $tbb41 = 0;
    public $tbk42 = 0;
    public $tbb42 = 0;
    public $tbk43 = 0;
    public $tbb43 = 0;
    public $tbk44 = 0;
    public $tbb44 = 0;
    // Angin
    public $cup_counter41 = 0;
    public $cup_counter42 = 0;
    public $arah41 = 0;
    public $kecepatan41 = 0;
    public $arah42 = 0;
    public $kecepatan42 = 0;
    public $arah43 = 0;
    public $kecepatan43 = 0;
    // Open Pan
    public $h2_openpan4 = 0;
    public $ev2_openpan4 = 0;
    public $ch4 = 0;
    public $t4 = 0;
    public $max4 = 0;
    public $min4 = 0;
    // Psychrometer Assmann
    public $bb41 = 0;
    public $bk41 = 0;
    public $bb42 = 0;
    public $bk42 = 0;
    public $bb43 = 0;
    public $bk43 = 0;
    public $bb44 = 0;
    public $bk44 = 0;
    public $bb45 = 0;
    public $bk45 = 0;
    public $bb46 = 0;
    public $bk46 = 0;
    public $bb47 = 0;
    public $bk47 = 0;
    // Suhu Tanah
    public $berumput41 = 0;
    public $gundul41 = 0;
    public $berumput42 = 0;
    public $gundul42 = 0;
    public $berumput43 = 0;
    public $gundul43 = 0;
    public $berumput44 = 0;
    public $gundul44 = 0;
    public $berumput45 = 0;
    public $gundul45 = 0;
    public $berumput46 = 0;
    public $gundul46 = 0;
    public $berumput47 = 0;
    public $gundul47 = 0;
    // Piche Evaporimeter
    public $h2_piche4 = 0;
    public $ev2_piche4 = 0;
    /* ---------- End Form 4 ---------- */

    /* ---------- Form 5 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk51 = 0;
    public $tbb51 = 0;
    public $tbk52 = 0;
    public $tbb52 = 0;
    public $tbk53 = 0;
    public $tbb53 = 0;
    public $tbk54 = 0;
    public $tbb54 = 0;
    // Angin
    public $cup_counter51 = 0;
    public $cup_counter52 = 0;
    public $arah51 = 0;
    public $kecepatan51 = 0;
    public $arah52 = 0;
    public $kecepatan52 = 0;
    public $arah53 = 0;
    public $kecepatan53 = 0;
    // Suhu Tanah
    public $berumput51 = 0;
    public $gundul51 = 0;
    public $berumput52 = 0;
    public $gundul52 = 0;
    public $berumput53 = 0;
    public $gundul53 = 0;
    public $berumput54 = 0;
    public $gundul54 = 0;
    public $berumput55 = 0;
    public $gundul55 = 0;
    public $berumput56 = 0;
    public $gundul56 = 0;
    public $berumput57 = 0;
    public $gundul57 = 0;
    // Termometer Maksimum dan Minimum
    public $max51 = 0;
    public $reset51 = 0;
    public $max52 = 0;
    public $reset52 = 0;
    // Kondisi Cuaca dan Tanah
    public $kode_tanah5 = 0;
    public $kode_cuaca5 = 0;
    /* ---------- End Form 5 ---------- */

    /* ---------- Form 6 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk61 = 0;
    public $tbb61 = 0;
    public $tbk62 = 0;
    public $tbb62 = 0;
    public $tbk63 = 0;
    public $tbb63 = 0;
    public $tbk64 = 0;
    public $tbb64 = 0;
    // Angin
    public $cup_counter61 = 0;
    public $cup_counter62 = 0;
    public $arah61 = 0;
    public $kecepatan61 = 0;
    public $arah62 = 0;
    public $kecepatan62 = 0;
    public $arah63 = 0;
    public $kecepatan63 = 0;
    // Open Pan
    public $h2_openpan6 = 0;
    public $ev2_openpan6 = 0;
    public $ch6 = 0;
    public $t6 = 0;
    public $max6 = 0;
    public $min6 = 0;
    // Psychrometer Assmann
    public $bb61 = 0;
    public $bk61 = 0;
    public $bb62 = 0;
    public $bk62 = 0;
    public $bb63 = 0;
    public $bk63 = 0;
    public $bb64 = 0;
    public $bk64 = 0;
    public $bb65 = 0;
    public $bk65 = 0;
    public $bb66 = 0;
    public $bk66 = 0;
    public $bb67 = 0;
    public $bk67 = 0;
    // Suhu Tanah
    public $berumput61 = 0;
    public $gundul61 = 0;
    public $berumput62 = 0;
    public $gundul62 = 0;
    public $berumput63 = 0;
    public $gundul63 = 0;
    public $berumput64 = 0;
    public $gundul64 = 0;
    public $berumput65 = 0;
    public $gundul65 = 0;
    public $berumput66 = 0;
    public $gundul66 = 0;
    public $berumput67 = 0;
    public $gundul67 = 0;
    // Piche Evaporimeter
    public $h2_piche6 = 0;
    public $ev2_piche6 = 0;
    /* ---------- End Form 6 ---------- */

    /* ---------- Form 7 ---------- */
    // Psychrometer Sangkar Meteorologi
    public $tbk71 = 0;
    public $tbb71 = 0;
    public $tbk72 = 0;
    public $tbb72 = 0;
    public $tbk73 = 0;
    public $tbb73 = 0;
    public $tbk74 = 0;
    public $tbb74 = 0;
    // Angin
    public $cup_counter71 = 0;
    public $cup_counter72 = 0;
    public $arah71 = 0;
    public $kecepatan71 = 0;
    public $arah72 = 0;
    public $kecepatan72 = 0;
    public $arah73 = 0;
    public $kecepatan73 = 0;
    // Termometer Maksimum dan Minimum
    public $max71 = 0;
    public $reset71 = 0;
    public $max72 = 0;
    public $reset72 = 0;
    /* ---------- End Form 7 ---------- */

    /* ---------- Form Hujan ---------- */
    // Form Hujan 1
    public $ch_hujan1 = 0;
    // Form Hujan 2
    public $ch_hujan2 = 0;
    // Form Hujan 3
    public $ch_hujan3 = 0;
    /* ---------- End Form Hujan ---------- */

    // Pagination
    use WithPagination;
    protected $listeners = ['dataStore' => 'render'];

    // Filter Tabel
    public $filterWaktu;
    public $filterTanggal;
    public $filterObserver;
    // public $dataPencatatan;
    public $clear = '';
    public function render()
    {
        if ($this->filterWaktu != null && $this->filterTanggal != null && $this->filterObserver != null) {
            $dataPencatatan = Pencatatan::where([
                ['tanggal', $this->filterTanggal],
                ['waktu', $this->filterWaktu],
                ['users_id', $this->filterObserver]
            ])->orderBy('id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterWaktu != null && $this->filterTanggal != null){
            $dataPencatatan = Pencatatan::where([
                ['tanggal', $this->filterTanggal],
                ['waktu', $this->filterWaktu]
            ])->orderBy('id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterWaktu != null && $this->filterObserver != null){
            $dataPencatatan = Pencatatan::where([
                ['waktu', $this->filterWaktu],
                ['users_id', $this->filterObserver]
            ])->orderBy('id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterObserver != null && $this->filterTanggal != null){
            $dataPencatatan = Pencatatan::where([
                ['tanggal', $this->filterTanggal],
                ['users_id', $this->filterObserver]
            ])->orderBy('id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterTanggal != null) {
            $dataPencatatan = Pencatatan::where(
                'tanggal', $this->filterTanggal)
                ->orderBy('id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterWaktu != null) {
            $dataPencatatan = Pencatatan::where(
                'waktu', $this->filterWaktu)
                ->orderBy('id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterObserver != null) {
            $dataPencatatan = Pencatatan::where('users_id', $this->filterObserver)
            ->orderBy('id','desc')->paginate(5);
            $this->clear = true;
        }
        else {
            $dataPencatatan = Pencatatan::orderBy('id','desc')->paginate(5);
        }
        // dd($dataPencatatan);

        return view('livewire.tabel-pencatatan-agromet',[
            'pencatatan' => $dataPencatatan,
            'observers' => User::where('roles', 'observer')->get(),
            'clear' => $this->clear
        ]);
    }

    public function clearFilter(){
        $this->clear = '';
        $this->filterWaktu = null;
        $this->filterTanggal = null;
        $this->filterObserver = null;
    }

    public function updating(){
        $this->resetPage();
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

    public function editForm2($pencatatan_id){
        $observer = Pencatatan::where('id', $pencatatan_id)->get()->first()->users->id;

        $dataPsychrometerSangkarMeteorologi =  Psychrometer_sangkar_meteorologi::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataAngin = Angin::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataOpenPan = Open_pan::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataPsychrometerAssmann = Psychrometer_assmann::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataSuhuTanah = Suhu_tanah::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataPicheEvaporimeter = Piche_evaporimeter::where("pencatatans_id", $pencatatan_id)->get()->first();

        $this->observer2 = $observer;
        $this->tbk21 = $dataPsychrometerSangkarMeteorologi->tbk1;
        $this->tbb21 = $dataPsychrometerSangkarMeteorologi->tbb1;
        $this->tbk22 = $dataPsychrometerSangkarMeteorologi->tbk2;
        $this->tbb22 = $dataPsychrometerSangkarMeteorologi->tbb2;
        $this->tbk23 = $dataPsychrometerSangkarMeteorologi->tbk3;
        $this->tbb23 = $dataPsychrometerSangkarMeteorologi->tbb3;
        $this->tbk24 = $dataPsychrometerSangkarMeteorologi->tbk4;
        $this->tbb24 = $dataPsychrometerSangkarMeteorologi->tbb4;

        $this->cup_counter21 = $dataAngin->cup_counter1;
        $this->cup_counter22 = $dataAngin->cup_counter2;
        $this->arah21 = $dataAngin->arah1;
        $this->kecepatan21 = $dataAngin->kecepatan1;
        $this->arah22 = $dataAngin->arah2;
        $this->kecepatan22 = $dataAngin->kecepatan2;
        $this->arah23 = $dataAngin->arah3;
        $this->kecepatan23 = $dataAngin->kecepatan3;

        $this->h2_openpan = $dataOpenPan->h;
        $this->ev2_openpan = $dataOpenPan->ev;
        $this->ch2 = $dataOpenPan->ch;
        $this->t2 = $dataOpenPan->t;
        $this->max2 = $dataOpenPan->max;
        $this->min2 = $dataOpenPan->min;

        $this->bb21 = $dataPsychrometerAssmann->bb1;
        $this->bk21 = $dataPsychrometerAssmann->bk1;
        $this->bb22 = $dataPsychrometerAssmann->bb2;
        $this->bk22 = $dataPsychrometerAssmann->bk2;
        $this->bb23 = $dataPsychrometerAssmann->bb3;
        $this->bk23 = $dataPsychrometerAssmann->bk3;
        $this->bb24 = $dataPsychrometerAssmann->bb4;
        $this->bk24 = $dataPsychrometerAssmann->bk4;
        $this->bb25 = $dataPsychrometerAssmann->bb5;
        $this->bk25 = $dataPsychrometerAssmann->bk5;
        $this->bb26 = $dataPsychrometerAssmann->bb6;
        $this->bk26 = $dataPsychrometerAssmann->bk6;
        $this->bb27 = $dataPsychrometerAssmann->bb7;
        $this->bk27 = $dataPsychrometerAssmann->bk7;

        $this->berumput21 = $dataSuhuTanah->berumput1;
        $this->gundul21 = $dataSuhuTanah->gundul1;
        $this->berumput22 = $dataSuhuTanah->berumput2;
        $this->gundul22 = $dataSuhuTanah->gundul2;
        $this->berumput23 = $dataSuhuTanah->berumput3;
        $this->gundul23 = $dataSuhuTanah->gundul3;
        $this->berumput24 = $dataSuhuTanah->berumput4;
        $this->gundul24 = $dataSuhuTanah->gundul4;
        $this->berumput25 = $dataSuhuTanah->berumput5;
        $this->gundul25 = $dataSuhuTanah->gundul5;
        $this->berumput26 = $dataSuhuTanah->berumput6;
        $this->gundul26 = $dataSuhuTanah->gundul6;
        $this->berumput27 = $dataSuhuTanah->berumput7;
        $this->gundul27 = $dataSuhuTanah->gundul7;

        $this->h2_piche = $dataPicheEvaporimeter->h;
        $this->h22_piche = $dataPicheEvaporimeter->h2;
        $this->ev2_piche = $dataPicheEvaporimeter->ev;
    }

    public function editForm3($pencatatan_id){
        $observer = Pencatatan::where('id', $pencatatan_id)->get()->first()->users->id;

        $dataPsychrometerSangkarMeteorologi =  Psychrometer_sangkar_meteorologi::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataOpenPan = Open_pan::where("pencatatans_id", $pencatatan_id)->get()->first();

        $this->observer3 = $observer;
        $this->tbk31 = $dataPsychrometerSangkarMeteorologi->tbk1;
        $this->tbb31 = $dataPsychrometerSangkarMeteorologi->tbb1;
        $this->tbk32 = $dataPsychrometerSangkarMeteorologi->tbk2;
        $this->tbb32 = $dataPsychrometerSangkarMeteorologi->tbb2;
        $this->tbk33 = $dataPsychrometerSangkarMeteorologi->tbk3;
        $this->tbb33 = $dataPsychrometerSangkarMeteorologi->tbb3;
        $this->tbk34 = $dataPsychrometerSangkarMeteorologi->tbk4;
        $this->tbb34 = $dataPsychrometerSangkarMeteorologi->tbb4;
        $this->ch3 = $dataOpenPan->ch;
    }

    public function editForm4($pencatatan_id){
        $observer = Pencatatan::where('id', $pencatatan_id)->get()->first()->users->id;

        $dataPsychrometerSangkarMeteorologi =  Psychrometer_sangkar_meteorologi::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataAngin = Angin::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataOpenPan = Open_pan::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataPsychrometerAssmann = Psychrometer_assmann::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataSuhuTanah = Suhu_tanah::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataPicheEvaporimeter = Piche_evaporimeter::where("pencatatans_id", $pencatatan_id)->get()->first();

        $this->observer4 = $observer;
        $this->tbk41 = $dataPsychrometerSangkarMeteorologi->tbk1;
        $this->tbb41 = $dataPsychrometerSangkarMeteorologi->tbb1;
        $this->tbk42 = $dataPsychrometerSangkarMeteorologi->tbk2;
        $this->tbb42 = $dataPsychrometerSangkarMeteorologi->tbb2;
        $this->tbk43 = $dataPsychrometerSangkarMeteorologi->tbk3;
        $this->tbb43 = $dataPsychrometerSangkarMeteorologi->tbb3;
        $this->tbk44 = $dataPsychrometerSangkarMeteorologi->tbk4;
        $this->tbb44 = $dataPsychrometerSangkarMeteorologi->tbb4;

        $this->cup_counter41 = $dataAngin->cup_counter1;
        $this->cup_counter42 = $dataAngin->cup_counter2;
        $this->arah41 = $dataAngin->arah1;
        $this->kecepatan41 = $dataAngin->kecepatan1;
        $this->arah42 = $dataAngin->arah2;
        $this->kecepatan42 = $dataAngin->kecepatan2;
        $this->arah43 = $dataAngin->arah3;
        $this->kecepatan43 = $dataAngin->kecepatan3;

        $this->h2_openpan4 = $dataOpenPan->h;
        $this->ev2_openpan4 = $dataOpenPan->ev;
        $this->ch4 = $dataOpenPan->ch;
        $this->t4 = $dataOpenPan->t;
        $this->max4 = $dataOpenPan->max;
        $this->min4 = $dataOpenPan->min;

        $this->bb41 = $dataPsychrometerAssmann->bb1;
        $this->bk41 = $dataPsychrometerAssmann->bk1;
        $this->bb42 = $dataPsychrometerAssmann->bb2;
        $this->bk42 = $dataPsychrometerAssmann->bk2;
        $this->bb43 = $dataPsychrometerAssmann->bb3;
        $this->bk43 = $dataPsychrometerAssmann->bk3;
        $this->bb44 = $dataPsychrometerAssmann->bb4;
        $this->bk44 = $dataPsychrometerAssmann->bk4;
        $this->bb45 = $dataPsychrometerAssmann->bb5;
        $this->bk45 = $dataPsychrometerAssmann->bk5;
        $this->bb46 = $dataPsychrometerAssmann->bb6;
        $this->bk46 = $dataPsychrometerAssmann->bk6;
        $this->bb47 = $dataPsychrometerAssmann->bb7;
        $this->bk47 = $dataPsychrometerAssmann->bk7;

        $this->berumput41 = $dataSuhuTanah->berumput1;
        $this->gundul41 = $dataSuhuTanah->gundul1;
        $this->berumput42 = $dataSuhuTanah->berumput2;
        $this->gundul42 = $dataSuhuTanah->gundul2;
        $this->berumput43 = $dataSuhuTanah->berumput3;
        $this->gundul43 = $dataSuhuTanah->gundul3;
        $this->berumput44 = $dataSuhuTanah->berumput4;
        $this->gundul44 = $dataSuhuTanah->gundul4;
        $this->berumput45 = $dataSuhuTanah->berumput5;
        $this->gundul45 = $dataSuhuTanah->gundul5;
        $this->berumput46 = $dataSuhuTanah->berumput6;
        $this->gundul46 = $dataSuhuTanah->gundul6;
        $this->berumput47 = $dataSuhuTanah->berumput7;
        $this->gundul47 = $dataSuhuTanah->gundul7;

        $this->h2_piche4 = $dataPicheEvaporimeter->h;
        $this->ev2_piche4 = $dataPicheEvaporimeter->ev;
    }

    public function editForm5($pencatatan_id){
        $observer = Pencatatan::where('id', $pencatatan_id)->get()->first()->users->id;

        $dataPsychrometerSangkarMeteorologi =  Psychrometer_sangkar_meteorologi::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataAngin = Angin::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataSuhuTanah = Suhu_tanah::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataTermometerMaksimumDanMinimum = Termometer_maksimum_dan_minimum::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataKondisiCuacaDanTanah = Kondisi_cuaca_dan_tanah::where("pencatatans_id", $pencatatan_id)->get()->first();

        $this->observer5 = $observer;
        $this->tbk51 = $dataPsychrometerSangkarMeteorologi->tbk1;
        $this->tbb51 = $dataPsychrometerSangkarMeteorologi->tbb1;
        $this->tbk52 = $dataPsychrometerSangkarMeteorologi->tbk2;
        $this->tbb52 = $dataPsychrometerSangkarMeteorologi->tbb2;
        $this->tbk53 = $dataPsychrometerSangkarMeteorologi->tbk3;
        $this->tbb53 = $dataPsychrometerSangkarMeteorologi->tbb3;
        $this->tbk54 = $dataPsychrometerSangkarMeteorologi->tbk4;
        $this->tbb54 = $dataPsychrometerSangkarMeteorologi->tbb4;

        $this->cup_counter51 = $dataAngin->cup_counter1;
        $this->cup_counter52 = $dataAngin->cup_counter2;
        $this->arah51 = $dataAngin->arah1;
        $this->kecepatan51 = $dataAngin->kecepatan1;
        $this->arah52 = $dataAngin->arah2;
        $this->kecepatan52 = $dataAngin->kecepatan2;
        $this->arah53 = $dataAngin->arah3;
        $this->kecepatan53 = $dataAngin->kecepatan3;

        $this->berumput51 = $dataSuhuTanah->berumput1;
        $this->gundul51 = $dataSuhuTanah->gundul1;
        $this->berumput52 = $dataSuhuTanah->berumput2;
        $this->gundul52 = $dataSuhuTanah->gundul2;
        $this->berumput53 = $dataSuhuTanah->berumput3;
        $this->gundul53 = $dataSuhuTanah->gundul3;
        $this->berumput54 = $dataSuhuTanah->berumput4;
        $this->gundul54 = $dataSuhuTanah->gundul4;
        $this->berumput55 = $dataSuhuTanah->berumput5;
        $this->gundul55 = $dataSuhuTanah->gundul5;
        $this->berumput56 = $dataSuhuTanah->berumput6;
        $this->gundul56 = $dataSuhuTanah->gundul6;
        $this->berumput57 = $dataSuhuTanah->berumput7;
        $this->gundul57 = $dataSuhuTanah->gundul7;

        $this->max51 = $dataTermometerMaksimumDanMinimum->max1;
        $this->reset51 = $dataTermometerMaksimumDanMinimum->reset1;
        $this->max52 = $dataTermometerMaksimumDanMinimum->max2;
        $this->reset52 = $dataTermometerMaksimumDanMinimum->reset2;

        $this->kode_tanah5 = $dataKondisiCuacaDanTanah->kode_tanah;
        $this->kode_cuaca5 = $dataKondisiCuacaDanTanah->kode_cuaca;
    }

    public function editForm6($pencatatan_id){
        $observer = Pencatatan::where('id', $pencatatan_id)->get()->first()->users->id;

        $dataPsychrometerSangkarMeteorologi =  Psychrometer_sangkar_meteorologi::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataAngin = Angin::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataOpenPan = Open_pan::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataPsychrometerAssmann = Psychrometer_assmann::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataSuhuTanah = Suhu_tanah::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataPicheEvaporimeter = Piche_evaporimeter::where("pencatatans_id", $pencatatan_id)->get()->first();

        $this->observer6 = $observer;
        $this->tbk61 = $dataPsychrometerSangkarMeteorologi->tbk1;
        $this->tbb61 = $dataPsychrometerSangkarMeteorologi->tbb1;
        $this->tbk62 = $dataPsychrometerSangkarMeteorologi->tbk2;
        $this->tbb62 = $dataPsychrometerSangkarMeteorologi->tbb2;
        $this->tbk63 = $dataPsychrometerSangkarMeteorologi->tbk3;
        $this->tbb63 = $dataPsychrometerSangkarMeteorologi->tbb3;
        $this->tbk64 = $dataPsychrometerSangkarMeteorologi->tbk4;
        $this->tbb64 = $dataPsychrometerSangkarMeteorologi->tbb4;

        $this->cup_counter61 = $dataAngin->cup_counter1;
        $this->cup_counter62 = $dataAngin->cup_counter2;
        $this->arah61 = $dataAngin->arah1;
        $this->kecepatan61 = $dataAngin->kecepatan1;
        $this->arah62 = $dataAngin->arah2;
        $this->kecepatan62 = $dataAngin->kecepatan2;
        $this->arah63 = $dataAngin->arah3;
        $this->kecepatan63 = $dataAngin->kecepatan3;

        $this->h2_openpan6 = $dataOpenPan->h;
        $this->ev2_openpan6 = $dataOpenPan->ev;
        $this->ch6 = $dataOpenPan->ch;
        $this->t6 = $dataOpenPan->t;
        $this->max6 = $dataOpenPan->max;
        $this->min6 = $dataOpenPan->min;

        $this->bb61 = $dataPsychrometerAssmann->bb1;
        $this->bk61 = $dataPsychrometerAssmann->bk1;
        $this->bb62 = $dataPsychrometerAssmann->bb2;
        $this->bk62 = $dataPsychrometerAssmann->bk2;
        $this->bb63 = $dataPsychrometerAssmann->bb3;
        $this->bk63 = $dataPsychrometerAssmann->bk3;
        $this->bb64 = $dataPsychrometerAssmann->bb4;
        $this->bk64 = $dataPsychrometerAssmann->bk4;
        $this->bb65 = $dataPsychrometerAssmann->bb5;
        $this->bk65 = $dataPsychrometerAssmann->bk5;
        $this->bb66 = $dataPsychrometerAssmann->bb6;
        $this->bk66 = $dataPsychrometerAssmann->bk6;
        $this->bb67 = $dataPsychrometerAssmann->bb7;
        $this->bk67 = $dataPsychrometerAssmann->bk7;

        $this->berumput61 = $dataSuhuTanah->berumput1;
        $this->gundul61 = $dataSuhuTanah->gundul1;
        $this->berumput62 = $dataSuhuTanah->berumput2;
        $this->gundul62 = $dataSuhuTanah->gundul2;
        $this->berumput63 = $dataSuhuTanah->berumput3;
        $this->gundul63 = $dataSuhuTanah->gundul3;
        $this->berumput64 = $dataSuhuTanah->berumput4;
        $this->gundul64 = $dataSuhuTanah->gundul4;
        $this->berumput65 = $dataSuhuTanah->berumput5;
        $this->gundul65 = $dataSuhuTanah->gundul5;
        $this->berumput66 = $dataSuhuTanah->berumput6;
        $this->gundul66 = $dataSuhuTanah->gundul6;
        $this->berumput67 = $dataSuhuTanah->berumput7;
        $this->gundul67 = $dataSuhuTanah->gundul7;

        $this->h2_piche6 = $dataPicheEvaporimeter->h;
        $this->ev2_piche6 = $dataPicheEvaporimeter->ev;
    }

    public function editForm7($pencatatan_id){
        $observer = Pencatatan::where('id', $pencatatan_id)->get()->first()->users->id;

        $dataPsychrometerSangkarMeteorologi =  Psychrometer_sangkar_meteorologi::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataAngin = Angin::where("pencatatans_id", $pencatatan_id)->get()->first();
        $dataTermometerMaksimumDanMinimum = Termometer_maksimum_dan_minimum::where("pencatatans_id", $pencatatan_id)->get()->first();

        $this->observer7 = $observer;
        $this->tbk71 = $dataPsychrometerSangkarMeteorologi->tbk1;
        $this->tbb71 = $dataPsychrometerSangkarMeteorologi->tbb1;
        $this->tbk72 = $dataPsychrometerSangkarMeteorologi->tbk2;
        $this->tbb72 = $dataPsychrometerSangkarMeteorologi->tbb2;
        $this->tbk73 = $dataPsychrometerSangkarMeteorologi->tbk3;
        $this->tbb73 = $dataPsychrometerSangkarMeteorologi->tbb3;
        $this->tbk74 = $dataPsychrometerSangkarMeteorologi->tbk4;
        $this->tbb74 = $dataPsychrometerSangkarMeteorologi->tbb4;

        $this->cup_counter71 = $dataAngin->cup_counter1;
        $this->cup_counter72 = $dataAngin->cup_counter2;
        $this->arah71 = $dataAngin->arah1;
        $this->kecepatan71 = $dataAngin->kecepatan1;
        $this->arah72 = $dataAngin->arah2;
        $this->kecepatan72 = $dataAngin->kecepatan2;
        $this->arah73 = $dataAngin->arah3;
        $this->kecepatan73 = $dataAngin->kecepatan3;

        $this->max71 = $dataTermometerMaksimumDanMinimum->max1;
        $this->reset71 = $dataTermometerMaksimumDanMinimum->reset1;
        $this->max72 = $dataTermometerMaksimumDanMinimum->max2;
        $this->reset72 = $dataTermometerMaksimumDanMinimum->reset2;
    }

    public function editFormHujan1($pencatatan_id){
        $observer = Pencatatan::where('id', $pencatatan_id)->get()->first()->users->id;
        $dataHujan = Open_pan::where("pencatatans_id", $pencatatan_id)->get()->first();

        $this->observerHujan1 = $observer;
        $this->ch_hujan1 = $dataHujan->ch;
    }

    public function editFormHujan2($pencatatan_id){
        $observer = Pencatatan::where('id', $pencatatan_id)->get()->first()->users->id;
        $dataHujan = Open_pan::where("pencatatans_id", $pencatatan_id)->get()->first();

        $this->observerHujan2 = $observer;
        $this->ch_hujan2 = $dataHujan->ch;
    }

    public function editFormHujan3($pencatatan_id){
        $observer = Pencatatan::where('id', $pencatatan_id)->get()->first()->users->id;
        $dataHujan = Open_pan::where("pencatatans_id", $pencatatan_id)->get()->first();

        $this->observerHujan3 = $observer;
        $this->ch_hujan3 = $dataHujan->ch;
    }
}
