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
            'nombre' => 'Abraham',
            'apellido' => 'Navor',
            'email' => 'navor@example.com',
            'telefono' => '1234567890',
            'fecha' => '2024-11-30',
            'hora' => '21:09:32',
            'personas' => 2,
            'vuelo' => 'AM1234',
            'hotel' => 'Hotel X',
        ],
        [
            'nombre' => 'Juan',
            'apellido' => 'Perez',
            'email' => 'juanperez@example.com',
            'telefono' => '0987654321',
            'fecha' => '2024-11-30',
            'hora' => '21:09:32',
            'personas' => 4,
            'vuelo' => 'AM5678',
            'hotel' => 'Hotel Y',
        ],
        ]);


    }
}
