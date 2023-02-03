<?php

namespace App\Http\Livewire;

use App\Models\Lama_penyinaran;
use App\Models\Pencatatan2;
use App\Models\User;
use Livewire\Component;

class AddLamaPenyinaran extends Component
{
    public $tanggal;
    public $observer;
    public $idPencatatan;
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
    public function render()
    {
        return view('livewire.add-lama-penyinaran', [
            'observers' => User::where('roles', 'observer')->get()
        ]);
    }

    public function storeForm(){
        $this->validate([
            'observer' => 'required',
            'tanggal' => 'required',
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
            'tanggal' => $this->tanggal,
            'users_id' => $this->observer
        ];

        Pencatatan2::create($dataPencatatan);
        $this->idPencatatan = Pencatatan2::all()->last()->id;

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
            '17-18' => $this->lm12,
            'pencatatan2s_id' => $this->idPencatatan
        ];

        Lama_penyinaran::create($dataLamaPenyinaran);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Lama Penyinaran Berhasil Disimpan!']);
    }
}
