<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $index = 0;
        $file = fopen(Storage::path('public/property-data.csv'), 'r');

        while ($row = fgetcsv($file)) {
            if ($index > 0) {
                $data = [
                    'name'      => $row[0],
                    'price'     => $row[1],
                    'bedrooms'  => $row[2],
                    'bathrooms' => $row[3],
                    'storeys'   => $row[4],
                    'garages'   => $row[5],
                ];

                $apartment = Apartment::create($data);
            }
            $index++;
        }
        fclose($file);
    }
}
