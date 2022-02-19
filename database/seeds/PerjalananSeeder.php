<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerjalananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perjalanan')->insert([
           'nama_perjalanan' => 'pariwisata',
           'user_id' => '2',
           'tanggal' => '24',
           'jam' => '08',
           'lokasi' => 'gunung',
           'suhu_tubuh' => '56'
        ]);
        DB::table('perjalanan')->insert([
            'nama_perjalanan' => 'pariwisata',
            'user_id' => '2',
            'tanggal' => '24',
            'jam' => '08',
            'lokasi' => 'gunung',
            'suhu_tubuh' => '56'
         ]);
         DB::table('perjalanan')->insert([
            'nama_perjalanan' => 'pariwisata',
            'user_id' => '2',
            'tanggal' => '24',
            'jam' => '08',
            'lokasi' => 'gunung',
            'suhu_tubuh' => '56'
         ]);
         DB::table('perjalanan')->insert([
            'nama_perjalanan' => 'pariwisata',
            'user_id' => '1',
            'tanggal' => '24',
            'jam' => '08',
            'lokasi' => 'gunung',
            'suhu_tubuh' => '56'
         ]);
         DB::table('perjalanan')->insert([
            'nama_perjalanan' => 'pariwisata',
            'user_id' => '1',
            'tanggal' => '24',
            'jam' => '08',
            'lokasi' => 'gunung',
            'suhu_tubuh' => '56'
         ]);
         DB::table('perjalanan')->insert([
            'nama_perjalanan' => 'pariwisata',
            'user_id' => '1',
            'tanggal' => '24',
            'jam' => '08',
            'lokasi' => 'gunung',
            'suhu_tubuh' => '56'
         ]);
         DB::table('perjalanan')->insert([
            'nama_perjalanan' => 'pariwisata',
            'user_id' => '1',
            'tanggal' => '24',
            'jam' => '08',
            'lokasi' => 'gunung',
            'suhu_tubuh' => '56'
         ]);
         DB::table('perjalanan')->insert([
            'nama_perjalanan' => 'pariwisata',
            'user_id' => '1',
            'tanggal' => '24',
            'jam' => '08',
            'lokasi' => 'gunung',
            'suhu_tubuh' => '56'
         ]);
    }
}
