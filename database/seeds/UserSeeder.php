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
            'indoregion_regencies_id' => '3276',
            'indoregion_provinces_id' => '32',
            'indoregion_districts_id' => '3276061',
            'indoregion_villages_id' => '3276061001',
            'no_telp' => '09213219',
            'gambar' => 'default2.png',
            'name' => 'Keimal Reyyan P',
            'email' => 'keimal@gmail.com',
            'password' => bcrypt('123'),
        ]);
        
    }
}
