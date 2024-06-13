<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majors = [
            ['name' => 'Teknik Informatika'],
            ['name' => 'Sistem Informasi'],
            ['name' => 'Teknik Elektro'],
            ['name' => 'Teknik Sipil'],
            ['name' => 'Teknik Mesin'],
            ['name' => 'Manajemen'],
            ['name' => 'Akuntansi'],
            ['name' => 'Ilmu Komunikasi'],
            ['name' => 'Hukum'],
            ['name' => 'Psikologi'],
        ];

        Major::insert($majors);
    }
}
