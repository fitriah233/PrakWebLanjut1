<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\i18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => 'darth',
                'nama' => 'darth@theempire.com',
                'alamat' => 'sukarame',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2057051001',
                'nama' => 'Fitriah Hardianti',
                'alamat' => 'Lampung Tengah',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '19743012',
                'nama' => 'Faldiniyus Mukti',
                'alamat' => 'Lampung Tengah',
                'created_at' => Time::now(),
            ],
        ];

        foreach ($data_mahasiswa as $data) {
            // Using Query Builder
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
