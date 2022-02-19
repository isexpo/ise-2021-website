<?php

namespace Database\Seeders\Bionix;

use App\Models\Bionix\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities_data = [
            [
                'city' => 'Provinsi Aceh', 'region' => 1
            ],
            [
                'city' => 'Provinsi Bali', 'region' => 1
            ],
            [
                'city' => 'Provinsi Bangka Belitung', 'region' => 1
            ],
            [
                'city' => 'Provinsi Bengkulu', 'region' => 1
            ],
            [
                'city' => 'Provinsi Gorontalo', 'region' => 1
            ],
            [
                'city' => 'Provinsi Jambi', 'region' => 1
            ],
            [
                'city' => 'Provinsi Kalimantan Barat', 'region' => 1
            ],
            [
                'city' => 'Provinsi Kalimantan Selatan', 'region' => 1
            ],
            [
                'city' => 'Provinsi Kalimantan Tengah', 'region' => 1
            ],
            [
                'city' => 'Provinsi Kalimantan Timur', 'region' => 1
            ],
            [
                'city' => 'Provinsi Kalimantan Utara', 'region' => 1
            ],
            [
                'city' => 'Provinsi Kepulauan Riau', 'region' => 1
            ],
            [
                'city' => 'Provinsi Lampung', 'region' => 1
            ],
            [
                'city' => 'Provinsi Maluku', 'region' => 1
            ],
            [
                'city' => 'Provinsi Maluku Utara', 'region' => 1
            ],
            [
                'city' => 'Provinsi Nusa Tenggara Barat', 'region' => 1
            ],
            [
                'city' => 'Provinsi Papua', 'region' => 1
            ],
            [
                'city' => 'Provinsi Papua Barat', 'region' => 1
            ],
            [
                'city' => 'Provinsi Riau', 'region' => 1
            ],
            [
                'city' => 'Provinsi Sulawesi Barat', 'region' => 1
            ],
            [
                'city' => 'Provinsi Sulawesi Selatan', 'region' => 1
            ],
            [
                'city' => 'Provinsi Sulawesi Tengah', 'region' => 1
            ],
            [
                'city' => 'Provinsi Sulawesi Tenggara', 'region' => 1
            ],
            [
                'city' => 'Provinsi Sulawesi Utara', 'region' => 1
            ],
            [
                'city' => 'Provinsi Sumatera Barat', 'region' => 1
            ],
            [
                'city' => 'Provinsi Sumatera Selatan', 'region' => 1
            ],
            [
                'city' => 'Provinsi Sumatera Utara', 'region' => 1
            ],
            [
                'city' => 'Provinsi Banten', 'region' => 2
            ],
            [
                'city' => 'Provinsi Daerah Istimewa Yogyakarata', 'region' => 2
            ],
            [
                'city' => 'Provinsi Daerah Khusus Ibukota Jakarta', 'region' => 2
            ],
            [
                'city' => 'Provinsi Jawa Barat', 'region' => 2
            ],
            [
                'city' => 'Provinsi Jawa Tengah', 'region' => 2
            ],
            [
                'city' => 'Kabupaten Blitar', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Bojonegoro', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Kediri', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Lamongan', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Madiun', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Magetan', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Nganjuk', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Ngawi', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Pacitan', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Ponorogo', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Trenggalek', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Tuban', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Tulungagung', 'region' => 3
            ],
            [
                'city' => 'Kota Blitar', 'region' => 3
            ],
            [
                'city' => 'Kota Kediri', 'region' => 3
            ],
            [
                'city' => 'Kota Madiun', 'region' => 3
            ],
            [
                'city' => 'Kabupaten Gresik', 'region' => 4
            ],
            [
                'city' => 'Kabupaten Jombang', 'region' => 4
            ],
            [
                'city' => 'Kabupaten Mojokerto', 'region' => 4
            ],
            [
                'city' => 'Kabupaten Pasuruan', 'region' => 4
            ],
            [
                'city' => 'Kabupaten Sidoarjo', 'region' => 4
            ],
            [
                'city' => 'Kota Mojokerto', 'region' => 4
            ],
            [
                'city' => 'Kota Pasuruan', 'region' => 4
            ],
            [
                'city' => 'Kabupaten Bangkalan', 'region' => 5
            ],
            [
                'city' => 'Kabupaten Banyuwangi', 'region' => 5
            ],
            [
                'city' => 'Kabupaten Bondowoso', 'region' => 5
            ],
            [
                'city' => 'Kabupaten Jember', 'region' => 5
            ],
            [
                'city' => 'Kabupaten Lumajang', 'region' => 5
            ],
            [
                'city' => 'Kabupaten Pamekasan', 'region' => 5
            ],
            [
                'city' => 'Kabupaten Probolinggo', 'region' => 5
            ],
            [
                'city' => 'Kabupaten Sampang', 'region' => 5
            ],
            [
                'city' => 'Kabupaten Situbondo', 'region' => 5
            ],
            [
                'city' => 'Kabupaten Sumenep', 'region' => 5
            ],
            [
                'city' => 'Kota Probolinggo', 'region' => 5
            ],
            [
                'city' => 'Kota Batu', 'region' => 6
            ],
            [
                'city' => 'Kabupaten Malang', 'region' => 6
            ],
            [
                'city' => 'Kota Malang', 'region' => 6
            ],
            [
                'city' => 'Kota Surabaya', 'region' => 7
            ]
        ];
        foreach ($cities_data as $city){
            City::create([
                'name'=>$city['city'],
                'region'=>$city['region']
            ]);
        }
    }
}
