<?php

namespace App\Http\Livewire;

use App\Models\Lama_penyinaran;
use App\Models\Pencatatan2;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TabelLamaPenyinaran extends Component
{
    // Filter Tabel
    public $filterTanggal;
    public $filterObserver;

    // Lama Penyinaran
    public $idPencatatan;
    public $observer;
    public $lm1 = 0;
    public $lm2 = 0;
    public $lm3 = 0;
    public $lm4 = 0;
    public $lm5 = 0;
    public $lm6 = 0;
    public $lm7 = 0;
    public $lm8 = 0;
    public $lm9 = 0;
    public $lm10 = 0;
    public $lm11 = 0;
    public $lm12 = 0;

    use WithPagination;
    // Clear Filter
    public $clear = '';

    // Listeners
    protected $listeners = ['dataStore' => 'render', 'dataDestroy' => 'dataDestroyer'];
    public function render()
    {
        if ($this->filterTanggal != null && $this->filterObserver != null) {
            $dataPencatatan = Pencatatan2::join('lama_penyinarans', 'pencatatan2s.id', '=', 'lama_penyinarans.pencatatan2s_id')->where([
                ['tanggal', $this->filterTanggal],
                ['users_id', $this->filterObserver]
            ])->orderBy('pencatatan2s.id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterTanggal != null) {
            $dataPencatatan = Pencatatan2::join('lama_penyinarans', 'pencatatan2s.id', '=', 'lama_penyinarans.pencatatan2s_id')
            ->where('tanggal', $this->filterTanggal)->orderBy('pencatatan2s.id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterObserver != null) {
            $dataPencatatan = Pencatatan2::join('lama_penyinarans', 'pencatatan2s.id', '=', 'lama_penyinarans.pencatatan2s_id')
            ->where('users_id', $this->filterObserver)->orderBy('pencatatan2s.id','desc')->paginate(5);
            $this->clear = true;
        } else {
            $dataPencatatan = Pencatatan2::join('lama_penyinarans', 'pencatatan2s.id', '=', 'lama_penyinarans.pencatatan2s_id')
            ->orderBy('pencatatan2s.id','desc')->paginate(5);
        }
        return view('livewire.tabel-lama-penyinaran',[
            'pencatatan' => $dataPencatatan,
            'observers' => User::where('roles', 'observer')->get()
        ]);
    }

    public function clearFilter(){
        $this->clear = '';
        $this->filterTanggal = null;
        $this->filterObserver = null;
    }

    public function updating(){
        $this->resetPage();
    }

    public function paginationView()
    {
        return 'custom-pagination-links-view2';
    }

    public function editForm($pencatatan_id){
        $observerLamaPenyinaran = Pencatatan2::where('id', $pencatatan_id)->get()->first()->users->id;
        $dataLamaPenyinaran = Lama_penyinaran::where("pencatatan2s_id", $pencatatan_id)->get()->first();

        $this->idPencatatan = $pencatatan_id;
        $this->observer = $observerLamaPenyinaran;

        $this->lm1 = $dataLamaPenyinaran->{"06-07"};
        $this->lm2 = $dataLamaPenyinaran->{"07-08"};
        $this->lm3 = $dataLamaPenyinaran->{"08-09"};
        $this->lm4 = $dataLamaPenyinaran->{"09-10"};
        $this->lm5 = $dataLamaPenyinaran->{"10-11"};
        $this->lm6 = $dataLamaPenyinaran->{"11-12"};
        $this->lm7 = $dataLamaPenyinaran->{"12-13"};
        $this->lm8 = $dataLamaPenyinaran->{"13-14"};
        $this->lm9 = $dataLamaPenyinaran->{"14-15"};
        $this->lm10 = $dataLamaPenyinaran->{"15-16"};
        $this->lm11 = $dataLamaPenyinaran->{"16-17"};
        $this->lm12 = $dataLamaPenyinaran->{"17-18"};
    }

    public function updateForm(){
        $this->validate([
            'observer' => 'required',
            'lm1' => 'numeric|nullable',
            'lm2' => 'numeric|nullable',
            'lm3' => 'numeric|nullable',
            'lm4' => 'numeric|nullable',
            'lm5' => 'numeric|nullable',
            'lm6' => 'numeric|nullable',
            'lm7' => 'numeric|nullable',
            'lm8' => 'numeric|nullable',
            'lm9' => 'numeric|nullable',
            'lm10' => 'numeric|nullable',
            'lm11' => 'numeric|nullable',
            'lm12' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'users_id' => $this->observer
        ];

        $dataLamaPenyinaran = [
            '06-07' => $this->lm1,
            '07-08' => $this->lm2,
            '08-09' => $this->lm3,
            '09-10' => $this->lm4,
            '10-11' => $this->lm5,
            '11-12' => $this->lm6,
            '12-13' => $this->lm7,
            '13-14' => $this->lm8,
            '14-15' => $this->lm9,
            '15-16' => $this->lm10,
            '16-17' => $this->lm11,
            '17-18' => $this->lm12
        ];

        Pencatatan2::where('id', $this->idPencatatan)->update($dataPencatatan);
        Lama_penyinaran::where('pencatatan2s_id', $this->idPencatatan)->update($dataLamaPenyinaran);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form Lama Penyinaran Berhasil Diubah!']);
    }

    public function deleteForm($id){
        $this->idPencatatan = $id;

        $dataPencatatan = Pencatatan2::find($id);
        $this->dispatchBrowserEvent('dataDeleteConfirmation', ['pencatatan' => $dataPencatatan]);
    }

    public function dataDestroyer(){
        Pencatatan2::find($this->idPencatatan)->delete();
        $this->resetPage();
    }
}
