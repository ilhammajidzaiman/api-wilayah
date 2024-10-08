<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WilayahProvinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WilayahProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "kode" => "11",
                "nama" => "ACEH",
            ],
            [
                "kode" => "12",
                "nama" => "SUMATERA UTARA",
            ],
            [
                "kode" => "13",
                "nama" => "SUMATERA BARAT",
            ],
            [
                "kode" => "14",
                "nama" => "RIAU",
            ],
            [
                "kode" => "15",
                "nama" => "JAMBI",
            ],
            [
                "kode" => "16",
                "nama" => "SUMATERA SELATAN",
            ],
            [
                "kode" => "17",
                "nama" => "BENGKULU",
            ],
            [
                "kode" => "18",
                "nama" => "LAMPUNG",
            ],
            [
                "kode" => "19",
                "nama" => "KEP. BANGKA BELITUNG",
            ],
            [
                "kode" => "21",
                "nama" => "KEP. RIAU",
            ],
            [
                "kode" => "31",
                "nama" => "DKI JAKARTA",
            ],
            [
                "kode" => "32",
                "nama" => "JAWA BARAT",
            ],
            [
                "kode" => "33",
                "nama" => "JAWA TENGAH",
            ],
            [
                "kode" => "34",
                "nama" => "DI YOGYAKARTA",
            ],
            [
                "kode" => "35",
                "nama" => "JAWA TIMUR",
            ],
            [
                "kode" => "36",
                "nama" => "BANTEN",
            ],
            [
                "kode" => "51",
                "nama" => "BALI",
            ],
            [
                "kode" => "52",
                "nama" => "NUSA TENGGARA BARAT",
            ],
            [
                "kode" => "53",
                "nama" => "NUSA TENGGARA TIMUR",
            ],
            [
                "kode" => "61",
                "nama" => "KALIMANTAN BARAT",
            ],
            [
                "kode" => "62",
                "nama" => "KALIMANTAN TENGAH",
            ],
            [
                "kode" => "63",
                "nama" => "KALIMANTAN SELATAN",
            ],
            [
                "kode" => "64",
                "nama" => "KALIMANTAN TIMUR",
            ],
            [
                "kode" => "65",
                "nama" => "KALIMANTAN UTARA",
            ],
            [
                "kode" => "71",
                "nama" => "SULAWESI UTARA",
            ],
            [
                "kode" => "72",
                "nama" => "SULAWESI TENGAH",
            ],
            [
                "kode" => "73",
                "nama" => "SULAWESI SELATAN",
            ],
            [
                "kode" => "74",
                "nama" => "SULAWESI TENGGARA",
            ],
            [
                "kode" => "75",
                "nama" => "GORONTALO",
            ],
            [
                "kode" => "76",
                "nama" => "SULAWESI BARAT",
            ],
            [
                "kode" => "81",
                "nama" => "MALUKU",
            ],
            [
                "kode" => "82",
                "nama" => "MALUKU UTARA",
            ],
            [
                "kode" => "91",
                "nama" => "PAPUA",
            ],
            [
                "kode" => "92",
                "nama" => "PAPUA BARAT",
            ]
        ];
        foreach ($data as $item) :
            WilayahProvinsi::create(
                [
                    'kode' => $item['kode'],
                    'nama' => $item['nama'],
                ],
            );
        endforeach;
    }
}
