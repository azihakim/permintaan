<?php

namespace App\Http\Livewire;

use App\Models\Angin_10m_24jam;
use App\Models\Pencatatan2;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TabelAngin10m24jam extends Component
{
    public $observer;
    public $kec_rata_rata = 0;
    public $arah_terbanyak = 0;
    public $kec_maks = 0;
    public $arah = 0;
    public $total_curah_hujan = 0;
    public $total_penguapan = 0;
    public $total_piche = 0;
    public $total_visibility = 0;
    public $idPencatatan;

    // Filter Tabel
    public $filterTanggal;
    public $filterObserver;

    // Clear Filter
    public $clear = '';

    // Pagination
    use WithPagination;

    // Listeners
    protected $listeners = ['dataStore' => 'render', 'dataDestroy' => 'dataDestroyer'];
    public function render()
    {
        if ($this->filterTanggal != null && $this->filterObserver != null) {
            $dataPencatatan = Pencatatan2::join('angin_10m_24jams', 'pencatatan2s.id', '=', 'angin_10m_24jams.pencatatan2s_id')->where([
                ['tanggal', $this->filterTanggal],
                ['users_id', $this->filterObserver]
            ])->orderBy('pencatatan2s.id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterTanggal != null) {
            $dataPencatatan = Pencatatan2::join('angin_10m_24jams', 'pencatatan2s.id', '=', 'angin_10m_24jams.pencatatan2s_id')->where(
                'tanggal', $this->filterTanggal)
                ->orderBy('pencatatan2s.id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterObserver != null) {
            $dataPencatatan = Pencatatan2::join('angin_10m_24jams', 'pencatatan2s.id', '=', 'angin_10m_24jams.pencatatan2s_id')->where('users_id', $this->filterObserver)
            ->orderBy('pencatatan2s.id','desc')->paginate(5);
            $this->clear = true;
        }
        else {
            $dataPencatatan = Pencatatan2::join('angin_10m_24jams', 'pencatatan2s.id', '=', 'angin_10m_24jams.pencatatan2s_id')
            ->orderBy('pencatatan2s.id','desc')->paginate(5);
        }
        return view('livewire.tabel-angin10m24jam', [
            'observers' => User::where('role', 'Observer')->get(),
            'pencatatan' => $dataPencatatan,
            'clear' => $this->clear
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
        $observerAngin = Pencatatan2::where('id', $pencatatan_id)->get()->first()->users->id;
        $dataAngin10m24jam = Angin_10m_24jam::where("pencatatan2s_id", $pencatatan_id)->get()->first();

        $this->idPencatatan = $pencatatan_id;
        $this->observer = $observerAngin;
        $this->arah = $dataAngin10m24jam->arah;
        $this->arah_terbanyak = $dataAngin10m24jam->arah_terbanyak;
    }

    public function updateForm(){
        $this->validate([
            'observer' => 'required',
            'arah_terbanyak' => 'numeric|nullable',
            'arah' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'users_id' => $this->observer
        ];

        $dataAngin10m24jam = [
            'arah_terbanyak' => $this->arah_terbanyak,
            'arah' => $this->arah
        ];

        Pencatatan2::where('id', $this->idPencatatan)->update($dataPencatatan);
        Angin_10m_24jam::where('pencatatan2s_id', $this->idPencatatan)->update($dataAngin10m24jam);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form Angin 10 M 24 Jam Berhasil Diubah!']);
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
