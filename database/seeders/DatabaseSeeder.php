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
            'role' =>'1',
            'email' =>'SA@gmail.com',
            'no_wa' => 'XXXX',
            'ktp' => 'XXX',
            'kategori' => 'XXX',
            'instansi' => 'XXX',
            'email_verified_at' => '2023-02-03',
            'password' => bcrypt('123123123')
        ]);

        User::create([
            'name' =>'abdul',
            'role' =>'0',
            'email' =>'azi@gmail.com',
            'no_wa' => '081279338859',
            'ktp' => 'KTP-1674566021.jpeg',
            'kategori' => 'Umum',
            'instansi' => 'MDP',
            'password' => bcrypt('123123123')
        ]);

        User::create([
            'name' =>'yosep',
            'role' =>'0',
            'email' =>'test@gmail.com',
            'no_wa' => '081279338859',
            'ktp' => 'KTP-1674566021.jpeg',
            'kategori' => 'Umum',
            'instansi' => 'MDP',
            'password' => bcrypt('123123123')
        ]);
    }
}