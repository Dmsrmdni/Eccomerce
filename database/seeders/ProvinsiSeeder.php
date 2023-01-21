<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = [
            ['provinsi' => 'ACEH'],
            ['provinsi' => 'SUMATERA UTARA'],
            ['provinsi' => 'SUMATERA BARAT'],
            ['provinsi' => 'RIAU'],
            ['provinsi' => 'JAMBI'],
            ['provinsi' => 'SUMATERA SELATAN'],
            ['provinsi' => 'BENGKULU'],
            ['provinsi' => 'LAMPUNG'],
            ['provinsi' => 'KEPULAUAN BANGKA BELITUNG'],
            ['provinsi' => 'KEPULAUAN RIAU'],
            ['provinsi' => 'DKI JAKARTA'],
            ['provinsi' => 'JAWA BARAT'],
            ['provinsi' => 'JAWA TENGAH'],
            ['provinsi' => 'DI YOGYAKARTA'],
            ['provinsi' => 'JAWA TIMUR'],
            ['provinsi' => 'BANTEN'],
            ['provinsi' => 'BALI'],
            ['provinsi' => 'NUSA TENGGARA BARAT'],
            ['provinsi' => 'NUSA TENGGARA TIMUR'],
            ['provinsi' => 'KALIMANTAN BARAT'],
            ['provinsi' => 'KALIMANTAN TENGAH'],
            ['provinsi' => 'KALIMANTAN SELATAN'],
            ['provinsi' => 'KALIMANTAN TIMUR'],
            ['provinsi' => 'KALIMANTAN UTARA'],
            ['provinsi' => 'SULAWESI UTARA'],
            ['provinsi' => 'SULAWESI TENGAH'],
            ['provinsi' => 'SULAWESI SELATAN'],
            ['provinsi' => 'SULAWESI TENGGARA'],
            ['provinsi' => 'GORONTALO'],
            ['provinsi' => 'SULAWESI BARAT'],
            ['provinsi' => 'MALUKU'],
            ['provinsi' => 'MALUKU UTARA'],
            ['provinsi' => 'PAPUA BARAT'],
            ['provinsi' => 'PAPUA'],
        ];

        DB::table('provinsis')->insert($provinsi);
    }
}
