<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                    'name'      => 'admin',
                    'username'  => 'admin', 
                    'password'  => bcrypt('admin'),
                    'level'     => 'admin',
                    'telepon'       => '-89606274696'
                 
            ],
            [
                    'name'      => 'petugas',
                    'username'  => 'petugas', 
                    'password'  => bcrypt('petugas'),
                    'level'     => 'petugas',
                    'telepon'       => '08885679900'
                 
            ],
            [
                    'name'      => 'masyarakat',
                    'username'  => 'masyarakat', 
                    'password'  => bcrypt('masyarakat'),
                    'level'     => 'masyarakat',
                    'telepon'       => '08567899999'
                 
            ]
            ];
                foreach ($user as $key => $value){
                    User::create($value);
                }
}
}