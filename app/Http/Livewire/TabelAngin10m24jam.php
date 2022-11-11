<?php

namespace App\Http\Livewire;

use App\Models\Angin_10m_24jam;
use App\Models\Pencatatan2;
use App\Models\User;
use Livewire\Component;

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

    public $filterTanggal;
    public $filterObserver;
    protected $listeners = ['dataStore' => 'render', 'dataDestroy' => 'dataDestroyer'];
    public function render()
    {
        return view('livewire.tabel-angin10m24jam', [
            'observers' => User::where('roles', 'observer')->get(),
            'pencatatan' => Pencatatan2::all()
        ]);
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

        Pencatatan2::where('id', $this->idPencatatan)->update($dataPencatatan);
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
    }
}
