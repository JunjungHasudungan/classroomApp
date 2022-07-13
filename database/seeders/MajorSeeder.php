<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = [
            [
                'id'            => 1,
                'major_code'    => 'RPL',
                'name'          => 'Rekayasa Perangkat Lunak'
            ],
            [
                'id'            => 2,
                'major_code'    => 'AK',
                'name'          => 'Akuntansi'
            ],
        ];

        Major::insert($majors);
    }
}
