<?php

namespace App\Http\Livewire;

use App\Models\Lysimeter;
use App\Models\Pencatatan2;
use App\Models\User;
use Livewire\Component;

class AddLysimeter extends Component
{
    public $tanggal;
    public $observer;
    public $idPencatatan;

    public $nama = '';
    public $keterangan = '';
    public $jumlahCH17 = 0;
    public $siram1 = 0;
    public $sedot1 = 0;
    public $siram2 = 0;
    public $sedot2 = 0;
    public $siram3 = 0;
    public $sedot3 = 0;

    public function render()
    {
        return view('livewire.add-lysimeter',[
            'observers' => User::where('role', 'Observer')->get()
        ]);
    }

    public function storeForm(){
        $this->validate([
            'observer' => 'required',
            'tanggal' => 'required',
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
            'tanggal' => $this->tanggal,
            'users_id' => $this->observer
        ];

        Pencatatan2::create($dataPencatatan);
        $this->idPencatatan = Pencatatan2::all()->last()->id;

        $dataLysimeter = [
            'nama_tanaman' => $this->nama,
            'keterangan_fase' => $this->keterangan,
            'jumlah_curah_hujan' => $this->jumlahCH17,
            'siram1' => $this->siram1,
            'sedot1' => $this->sedot1,
            'siram2' => $this->siram2,
            'sedot2' => $this->sedot2,
            'siram3' => $this->siram3,
            'sedot3' => $this->sedot3,
            'pencatatan2s_id' => $this->idPencatatan
        ];

        Lysimeter::create($dataLysimeter);
        $this->reset();
        $this->emit('dataStore');
        $this->dispatchBrowserEvent('alert', ['success'=>'Data Lysimeter Berhasil Disimpan!']);
    }

}
