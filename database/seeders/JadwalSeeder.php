<?php

namespace Database\Seeders;

use App\Models\JadwalModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
        JadwalModel::factory()->make();
        collect([
            [
                'kode'=> '001',
                'matkul'=> 'struktur data',
                'dosen'=> 'bu fina',
                'jam'=> '08.00 - 10.00',
                'kelas'=> 'A'

            ],
            [
                'kode'=> '002',
                'matkul'=> 'metopen',
                'dosen'=> 'pak stanly',
                'jam'=> '10.00 - 12.00',
                'kelas'=> 'A'

            ],
            [
                'kode'=> '003',
                'matkul'=> 'basis data',
                'dosen'=> 'bu tatik',
                'jam'=> '13.00 - 15.00',
                'kelas'=> 'A'

            ],
            [
                'kode'=> '004',
                'matkul'=> 'spk',
                'dosen'=> 'pak hasan',
                'jam'=> '08.00 - 10.00',
                'kelas'=> 'B'

            ],
            [
                'kode'=> '005',
                'matkul'=> 'proses bisnis',
                'dosen'=> 'bu zesy',
                'jam'=> '13.00 - 15.00',
                'kelas'=> 'B'

            ],
            ])->each(function($jadwal){
                \app\Models\JadwalModel::create([
                    'kode'=>$jadwal['kode'],
                    'matkul'=>$jadwal['matkul'],
                    'dosen'=>$jadwal['dosen'],
                    'jam'=>$jadwal['jam'],
                    'kelas'=>$jadwal['kelas'],

                ]);

                });

    }
}
