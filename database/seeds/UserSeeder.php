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
          'nik' => '9821921812',
          'name' => 'Admin',
          'level' => 'admin',
          'alamat' => 'Jln Melati III, GANDUL, CINERE, KOTA DEPOK, JAWA BARAT',
          'no_telp' => '08389878989',
          'email' => 'admin@gmail.com',
          'email_verified_at' => '2022-04-05 09:08:17',
          'password' => bcrypt('123'),
          'remember_token' => str_random(60),
          'created_at' => '2022-04-05 09:07:31',
          'updated_at' => '2022-04-05 10:21:24'
        ]);
        
    }
}
