<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nik' => '21323123',
            'alamat' => 'jln apa aja',
            'kota_id' => '2',
            'no_telp' => '09213219',
            'gambar' => 'default2.png',
            'name' => 'Keimal Reyyan P',
            'email' => 'keimal@gmail.com',
            'password' => bcrypt('123'),
        ]);
        
        DB::table('users')->insert([
            'nik' => '132321321',
            'alamat' => 'jln apa aja',
            'kota_id' => '2',
            'no_telp' => '13121',
            'gambar' => 'default2.png',
            'name' => 'Alif Nur Miftah',
            'email' => 'alif@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
