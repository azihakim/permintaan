<?php

namespace Database\Seeders;
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
        Jeniskegiatan::create([
            'jenis_kegiatan' => 'Kegiatan Penanggulangan Bencana',
        ]);
        Jeniskegiatan::create([
            'jenis_kegiatan' => 'Kegiatan Sosial',
        ]);
        Jeniskegiatan::create([
            'jenis_kegiatan' => 'Kegiatan Keagamaan',
        ]);
        Jeniskegiatan::create([
            'jenis_kegiatan' => 'Kegiatan Pertahanan dan Keamanan',
        ]);
        Jeniskegiatan::create([
            'jenis_kegiatan' => 'Kegiatan Pendidikan/Penelitian non Komersil',
        ]);
        Jeniskegiatan::create([
            'jenis_kegiatan' => 'Kegiatan Pemerintahan Pusat atau Daerah',
        ]);
        Jeniskegiatan::create([
            'jenis_kegiatan' => 'Layanan Bertarif'
        ]);
    }
}
