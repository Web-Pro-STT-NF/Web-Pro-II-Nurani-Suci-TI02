<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim'               => '0110221048',
                'nama'              => 'Nurani Suci',
                'jenis_kelamin'     => 'Perempuan',
                'tgl_lahir'         => '2002-11-06',
                'tempat_lahir'      => 'Jakarta',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.9',
                'created_at'        => Time::now()
            ],
            [
                'nim'               => '0110221048',
                'nama'              => 'Nurani Suci',
                'jenis_kelamin'     => 'Perempuan',
                'tgl_lahir'         => '2002-11-06',
                'tempat_lahir'      => 'Jakarta',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.9',
                'created_at'        => Time::now()
            ]
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
