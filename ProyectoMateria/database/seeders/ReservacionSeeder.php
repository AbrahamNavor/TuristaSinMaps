<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ReservacionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reservacion')->insert([
            [
            'nombre' => 'Carlos',
            'apellido' => 'Gomez',
            'email' => 'carlosgomez@example.com',
            'telefono' => '1122334455',
            'fecha' => '2024-12-01',
            'hora' => '18:30:00',
            'personas' => 3,
            'vuelo' => 'AM9876',
            'hotel' => 'Hotel Z',
            ],
        [
            'nombre' => 'Ana',
            'apellido' => 'Martinez',
            'email' => 'anamartinez@example.com',
            'telefono' => '1234567890',
            'fecha' => '2024-11-25',
            'hora' => '20:00:00',
            'personas' => 2,
            'vuelo' => 'AM1234',
            'hotel' => 'Hotel X',
        ],
        ]);


    }
}
