<?php

namespace Database\Seeders;

use App\Models\Firmware;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FirmwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Firmware::create([
            'name' => 'Cool Firmware',
            'version' => '4.2.3',
            'lines_of_code' => '111'
        ]);
        Firmware::create([
            'name' => 'Sussy Firmware',
            'version' => '1.2.4',
            'lines_of_code' => '555'
        ]);
        Firmware::create([
            'name' => 'Intelligent Firmware',
            'version' => '0.2.3',
            'lines_of_code' => '777'
        ]);
        Firmware::create([
            'name' => 'Smurky Firmware',
            'version' => '8.2.3',
            'lines_of_code' => '763'
        ]);
        Firmware::create([
            'name' => 'Miserable Firmware',
            'version' => '8.7.3',
            'lines_of_code' => '764'
        ]);
        Firmware::create([
            'name' => 'Extravagant Firmware',
            'version' => '3.2.0',
            'lines_of_code' => '1000'
        ]);
        Firmware::create([
            'name' => 'Undispute Firmware',
            'version' => '8.7.8',
            'lines_of_code' => '19383'
        ]);
        Firmware::create([
            'name' => 'Organised Firmware',
            'version' => '5.5.5',
            'lines_of_code' => '666'
        ]);
        Firmware::create([
            'name' => 'Great Firmware',
            'version' => '3.2.10',
            'lines_of_code' => '2323'
        ]);
        Firmware::create([
            'name' => 'Final Firmware',
            'version' => '4.2.19',
            'lines_of_code' => '4232'
        ]);

    }
}
