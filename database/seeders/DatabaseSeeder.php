<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('jenis_kelamin')->insert(
            [
                ['kode' => '1','jenis_kelamin' => 'Laki-laki'],
                ['kode' => '2','jenis_kelamin' => 'Perempuan']
            ]
        );

        DB::table('nama_profesi')->insert(
            [
                ['kode' => 'A','nama_profesi' => 'Petani'],
                ['kode' => 'B','nama_profesi' => 'Teknisi'],
                ['kode' => 'C','nama_profesi' => 'Guru'],
                ['kode' => 'D','nama_profesi' => 'Nelayan'],
                ['kode' => 'E','nama_profesi' => 'Seniman']
            ]
        );
    }
}
