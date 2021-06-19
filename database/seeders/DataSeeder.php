<?php

namespace Database\Seeders;

use App\Models\Data;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data::create(
            [
                'nim' => '1908107010020',
                'nama' => 'Bayu Ramadhan',
                'Jurusan' => 'Informatika',
                'ttl' => 'LM, 11 nov 2001',
                'alamat' => 'aceh',
                'orpil' => 'BEM FMIPA',
                'alasan' => 'mau',
                'statusform' => 'Belum Dikonfirmasi',
            ]
        );
    }
}
