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
        User::create([
            'name' =>'Super Admin',
            'role' =>'Super Admin',
            'email' =>'SA@gmail.com',
            'kategori' => 'Pegawai',
            'instansi' => 'BMKG-STAKLIM SUMSEL',
            'email_verified_at' => '2023-02-03',
            'password' => bcrypt('123')
        ]);
        User::create([
            'name' =>'Budi',
            'role' =>'Masyarakat',
            'email' =>'Budi@gmail.com',
            'kategori' => 'Umum',
            'instansi' => 'Umum',
            'email_verified_at' => '2023-02-03',
            'password' => bcrypt('123')
        ]);
    }
}