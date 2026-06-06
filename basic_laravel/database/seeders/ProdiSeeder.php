<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = [
            [
            'nama_prodi' => 'Teknik Informatika',
            'fakultas_id' => 'Dr. Andi Setiawan, S.Kom., M.T'
            ],

            [
            'nama_prodi' => 'Manajemen',
            'fakultas_id' => 'Dr. Siti Nurjanah, S.E., M.Si.'
            ]


        ];

    
        foreach ($prodis as $prodi) {
            $fakultasId = Fakultas::inRandomOrder()->first()->id;

            $prodi['prodi'] = $fakultasId; 

            Prodi::create($fakultasId);  
        }   
    }
}
