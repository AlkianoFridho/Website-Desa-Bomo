<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organisasi;

class OrganisasiSeeder extends Seeder
{
    public function run(): void
    {
        // Data Kepala Desa (Tingkat 1)
        Organisasi::create([
            'nama' => 'H. Ahmad Sudrajat',
            'jabatan' => 'Kepala Desa',
            'foto' => 'organisasi/kades.jpg'
        ]);

        // Data Perangkat Inti (Tingkat 2)
        Organisasi::create([
            'nama' => 'Siti Aminah',
            'jabatan' => 'Sekretaris Desa',
            'foto' => 'organisasi/sekdes.jpg'
        ]);

        Organisasi::create([
            'nama' => 'Budi Santoso',
            'jabatan' => 'Bendahara',
            'foto' => 'organisasi/bendahara.jpg'
        ]);

        // Data Staf (Tingkat 3)
        Organisasi::create([
            'nama' => 'Dedi Irawan',
            'jabatan' => 'Kaur Keuangan',
            'foto' => 'organisasi/staf1.jpg'
        ]);

        Organisasi::create([
            'nama' => 'Lani Cahyani',
            'jabatan' => 'Kasi Pemerintahan',
            'foto' => 'organisasi/staf2.jpg'
        ]);
    }
}