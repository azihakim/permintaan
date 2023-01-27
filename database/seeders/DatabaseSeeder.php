<?php

namespace Database\Seeders;

use App\Models\Datapermintaan;
use App\Models\Formulir;
use App\Models\User;
use App\Models\Jeniskegiatan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Formulir::create([
        //     'jenis_permintaan' =>'layanan bertarif',
        //     'status_form' =>'1',
        //     'nama' =>'layananbertarif',
        //     'telepon' =>'252525',
        //     'email'=>'test@gmail.com',
        // ]);

        // Datapermintaan::create([
        //     'formulir_id' =>'1',
        //     'jenis_data' =>'data petir',
        //     'lokasi' =>'lokasi petir 1',
        //     'latitude' =>'latitude 111',
        //     'longitude' =>'longitude 111',
        //     'tgl_dari' =>'2022-10-7',
        //     'tgl_sampai' =>'2022-09-30',
        // ]);

        // Formulir::create([
        //     'jenis_permintaan' =>'kegiatan sosial',
        //     'status_form' =>'2',
        //     'nama' =>'test seed',
        //     'telepon' =>'252525',
        //     'email'=>'test@gmail.com',
        // ]);

        // Formulir::create([
        //     'jenis_permintaan' =>'kegiatan keagamaan',
        //     'status_form' =>'3',
        //     'nama' =>'test seed',
        //     'telepon' =>'252525',
        //     'email'=>'test@gmail.com',
        // ]);

        // Formulir::create([
        //     'jenis_permintaan' =>'layanan bertarif',
        //     'status_form' =>'4',
        //     'nama' =>'test seed',
        //     'telepon' =>'252525',
        //     'email'=>'test@gmail.com',
        // ]);
        
        // Formulir::create([
        //     'jenis_permintaan' =>'layanan bertarif',
        //     'status_form' =>'5',
        //     'nama' =>'test seed',
        //     'telepon' =>'252525',
        //     'email'=>'test@gmail.com',
        // ]);

        // Formulir::create([
        //     'jenis_permintaan' =>'kegiatan sosial',
        //     'status_form' =>'6',
        //     'nama' =>'test seed',
        //     'telepon' =>'252525',
        //     'email'=>'test@gmail.com',
        // ]);

        User::create([
            'name' =>'abdul',
            'email' =>'azi@gmail.com',
            'no_wa' => '081279338859',
            'ktp' => 'KTP-1674566021.jpeg',
            'kategori' => 'Umum',
            'instansi' => 'MDP',
            'password' => bcrypt('123123123')
        ]);
    }
}