<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Cristiano Ronaldo',
                'posisi' => 'Striker',
                'no_punggung' => 7,
            ],
            [
                'nama' => 'Lionel Messi',
                'posisi' => 'Striker',
                'no_punggung' => 10,
            ],
            [
                'nama' => 'Robert Lewandowski',
                'posisi' => 'Striker',
                'no_punggung' => 9,
            ],
            [
                'nama' => 'Kevin De Bruyne',
                'posisi' => 'Midfielder',
                'no_punggung' => 17,
            ],
            [
                'nama' => 'Neymar Jr',
                'posisi' => 'Striker',
                'no_punggung' => 10,
            ],
        ];

        foreach ($data as $pemain) {
            \App\Models\Pemain::create($pemain);
        }
    }
}
