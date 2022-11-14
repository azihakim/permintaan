<?php

namespace App\Http\Livewire;

use App\Models\Angin_10m_24jam;
use App\Models\Pencatatan;
use App\Models\Pencatatan2;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AddAngin10m24jam extends Component
{
    use WithPagination;
    public $tanggal;
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
    public function render()
    {
        return view('livewire.add-angin10m24jam',[
            'observers' => User::where('roles', 'observer')->get()
        ]);
    }

    public function storeForm(){
        $this->validate([
            'observer' => 'required',
            'tanggal' => 'required',
            'arah_terbanyak' => 'numeric|nullable',
            'arah' => 'numeric|nullable'
        ]);

        $dataPencatatan = [
            'tanggal' => $this->tanggal,
            'users_id' => $this->observer
        ];

        Pencatatan2::create($dataPencatatan);
        $this->idPencatatan = Pencatatan2::all()->last()->id;

        $dataAngin10M24jam = [
            'arah_terbanyak' => $this->arah_terbanyak,
            'arah' => $this->arah,
            'pencatatan2s_id' => $this->idPencatatan
        ];

        Angin_10m_24jam::create($dataAngin10M24jam);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Berhasil Disimpan!']);
    }
}
