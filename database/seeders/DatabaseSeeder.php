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
        // User::create([
        //     'name' =>'Super Admin',
        //     'role' =>'Super Admin',
        //     'email' =>'SA@gmail.com',
        //     'no_wa' => 'XXXX',
        //     'ktp' => 'XXX',
        //     'kategori' => 'Pegawai',
        //     'instansi' => 'BMKG-STAKLIM SUMSEL',
        //     'email_verified_at' => '2023-02-03',
        //     'password' => bcrypt('123123123')
        // ]);

        // User::create([
        //     'name' =>'Abdul Halim',
        //     'role' =>'Masyarakat',
        //     'email' =>'abdul@gmail.com',
        //     'no_wa' => '081279338859',
        //     'ktp' => 'KTP-1674566021.jpeg',
        //     'kategori' => 'Pemerintahan',
        //     'instansi' => 'MDP',
        //     'email_verified_at' => '2023-02-03',
        //     'password' => bcrypt('123123123')
        // ]);

        // User::create([
        //     'name' =>'yosep',
        //     'role' =>'Masyarakat',
        //     'email' =>'test@gmail.com',
        //     'no_wa' => '081279338859',
        //     'ktp' => 'KTP-1674566021.jpeg',
        //     'kategori' => 'Swasta',
        //     'instansi' => 'MDP',
        //     'email_verified_at' => '2023-02-03',
        //     'password' => bcrypt('123123123')
        // ]);


        User::create([
            'name' =>'Chris',
            'role' =>'Admin',
            'email' =>'Admin@gmail.com',
            'no_wa' => '081279338859',
            'ktp' => 'KTP-1674566021.jpeg',
            'kategori' => 'Umum',
            'instansi' => 'MDP',
            'email_verified_at' => '2023-02-03',
            'password' => bcrypt('123123123')
            ]);
        // User::create([
        //     'name' =>'Chris',
        //     'role' =>'Admin',
        //     'email' =>'2024240105',
        //     'no_wa' => '081279338859',
        //     'ktp' => 'KTP-1674566021.jpeg',
        //     'kategori' => 'Umum',
        //     'instansi' => 'MDP',
        //     'email_verified_at' => '2023-02-03',
        //     'password' => bcrypt('123123123')
        // ]);

        // Formulir::create([
        //     'user_id' => '4',
        //     'jenis_permintaan' => 'Kegiatan sosial',
        //     'status_form' => '4'
        // ]);
        Formulir::create([
            'user_id' => '5',
            'jenis_permintaan' => 'Kegiatan penaggulangan bencana',
            'status_form' => '5'
        ]);
    }
}