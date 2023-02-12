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
            'no_wa' => 'XXXX',
            'ktp' => 'XXX',
            'kategori' => 'BMKG SUMSEL',
            'instansi' => 'BMKG SUMSEL',
            'email_verified_at' => '2023-02-03',
            'password' => bcrypt('123123123')
        ]);

        User::create([
            'name' =>'abdul',
            'role' =>'Masyarakat',
            'email' =>'azi@gmail.com',
            'no_wa' => '081279338859',
            'ktp' => 'KTP-1674566021.jpeg',
            'kategori' => 'Umum',
            'instansi' => 'MDP',
            'email_verified_at' => '2023-02-03',
            'password' => bcrypt('123123123')
        ]);

        User::create([
            'name' =>'yosep',
            'role' =>'Masyarakat',
            'email' =>'test@gmail.com',
            'no_wa' => '081279338859',
            'ktp' => 'KTP-1674566021.jpeg',
            'kategori' => 'Swasta',
            'instansi' => 'MDP',
            'email_verified_at' => '2023-02-03',
            'password' => bcrypt('123123123')
        ]);
    }
}