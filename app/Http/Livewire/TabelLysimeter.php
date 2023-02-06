<?php

namespace App\Http\Livewire;

use App\Models\Lysimeter;
use App\Models\Pencatatan2;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TabelLysimeter extends Component
{
    // Filter Tabel
    public $filterTanggal;
    public $filterObserver;

    // Lysimeter
    public $idPencatatan;
    public $observer;
    public $nama = '';
    public $keterangan = '';
    public $jumlahCH17 = 0;
    public $siram1 = 0;
    public $sedot1 = 0;
    public $siram2 = 0;
    public $sedot2 = 0;
    public $siram3 = 0;
    public $sedot3 = 0;

    use WithPagination;
    // Clear Filter
    public $clear = '';

    // Listeners
    protected $listeners = ['dataStore' => 'render', 'dataDestroy' => 'dataDestroyer'];
    public function render()
    {
        if ($this->filterTanggal != null && $this->filterObserver != null) {
            $dataPencatatan = Pencatatan2::join('lysimeters', 'pencatatan2s.id', '=', 'lysimeters.pencatatan2s_id')->where([
                ['tanggal', $this->filterTanggal],
                ['users_id', $this->filterObserver]
            ])->orderBy('pencatatan2s.id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterTanggal != null) {
            $dataPencatatan = Pencatatan2::join('lysimeters', 'pencatatan2s.id', '=', 'lysimeters.pencatatan2s_id')
            ->where('tanggal', $this->filterTanggal)->orderBy('pencatatan2s.id','desc')->paginate(5);
            $this->clear = true;
        } else if ($this->filterObserver != null) {
            $dataPencatatan = Pencatatan2::join('lysimeters', 'pencatatan2s.id', '=', 'lysimeters.pencatatan2s_id')
            ->where('users_id', $this->filterObserver)->orderBy('pencatatan2s.id','desc')->paginate(5);
            $this->clear = true;
        } else {
            $dataPencatatan = Pencatatan2::join('lysimeters', 'pencatatan2s.id', '=', 'lysimeters.pencatatan2s_id')
            ->orderBy('pencatatan2s.id','desc')->paginate(5);
        }
        return view('livewire.tabel-lysimeter', [
            'observers' => User::where('role', 'Observer')->get(),
            'pencatatan' => $dataPencatatan
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
        $observerLysimeter = Pencatatan2::where('id', $pencatatan_id)->get()->first()->users->id;
        $dataLysimeter = Lysimeter::where("pencatatan2s_id", $pencatatan_id)->get()->first();

        $this->idPencatatan = $pencatatan_id;
        $this->observer = $observerLysimeter;

        $this->nama = $dataLysimeter->nama_tanaman;
        $this->keterangan = $dataLysimeter->keterangan_fase;
        $this->jumlahCH17 = $dataLysimeter->jumlah_curah_hujan;
        $this->siram1 = $dataLysimeter->siram1;
        $this->sedot1 = $dataLysimeter->sedot1;
        $this->siram2 = $dataLysimeter->siram2;
        $this->sedot2 = $dataLysimeter->sedot2;
        $this->siram3 = $dataLysimeter->siram3;
        $this->sedot3 = $dataLysimeter->sedot3;
    }

    public function updateForm(){
        $this->validate([
            'observer' => 'required',
            'nama' => 'string|nullable',
            'keterangan' => 'string|nullable',
            'jumlahCH17' => 'numeric|nullable',
            'siram1' => 'numeric|nullable',
            'sedot1' => 'numeric|nullable',
            'siram2' => 'numeric|nullable',
            'sedot2' => 'numeric|nullable',
            'siram3' => 'numeric|nullable',
            'sedot3' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'users_id' => $this->observer
        ];

        $dataLysimeter = [
            'nama_tanaman' => $this->nama,
            'keterangan_fase' => $this->keterangan,
            'jumlah_curah_hujan' => $this->jumlahCH17,
            'siram1' => $this->siram1,
            'sedot1' => $this->sedot1,
            'siram2' => $this->siram2,
            'sedot2' => $this->sedot2,
            'siram3' => $this->siram3,
            'sedot3' => $this->sedot3
        ];

        Pencatatan2::where('id', $this->idPencatatan)->update($dataPencatatan);
        Lysimeter::where('pencatatan2s_id', $this->idPencatatan)->update($dataLysimeter);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Form Lysimeter Berhasil Diubah!']);
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
