<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table("tblabsensi")->truncate();
        for ($i=1; $i <= 15 ; $i++) {
            \App\Models\Absensi::create([
                "pertemuan_id" => $i,
                "mahasiswa_id" => 2,
                "status" => \Arr::random(["absen","hadir","izin","sakit"])
            ]);

            \App\Models\Absensi::create([
                "pertemuan_id" => $i,
                "mahasiswa_id" => 3,
                "status" => \Arr::random(["absen","hadir","izin","sakit"])
            ]);
        }
    }
}
