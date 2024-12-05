<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vuelosSeeders extends Seeder
{

    public function run(): void
    {

        DB::table('registro_vuelos')->insert([
            [
                'origen' => 'Ciudad de México',
                'destino' => 'Guadalajara',
                'fecha_salida' => '2024-12-10',
                'fecha_regreso' => '2024-12-15',
                'asientos' => 5,
                'clase' => 'económica',
                'aerolinea' => 'Aeroméxico',
                'vuelo' => 'AM1234',
                'horario_salida' => '08:00',
                'horario_llegada' => '09:30',
                'precio' => 1500.00,
            ],
            [
                'origen' => 'Monterrey',
                'destino' => 'Cancún',
                'fecha_salida' => '2024-12-20',
                'fecha_regreso' => '2024-12-25',
                'asientos' => 3,
                'clase' => 'ejecutiva',
                'aerolinea' => 'VivaAerobus',
                'vuelo' => 'VB5678',
                'horario_salida' => '10:00',
                'horario_llegada' => '12:45',
                'precio' => 3000.00,
            ],
            [
                'origen' => 'Guadalajara',
                'destino' => 'Tijuana',
                'fecha_salida' => '2024-12-05',
                'fecha_regreso' => '2024-12-10',
                'asientos' => 2,
                'clase' => 'primera',
                'aerolinea' => 'Volaris',
                'vuelo' => 'VO9102',
                'horario_salida' => '13:30',
                'horario_llegada' => '15:45',
                'precio' => 5000.00,
            ],
            [
                'origen' => 'Mérida',
                'destino' => 'Ciudad de México',
                'fecha_salida' => '2024-11-30',
                'fecha_regreso' => '2024-12-05',
                'asientos' => 4,
                'clase' => 'económica',
                'aerolinea' => 'Aeroméxico',
                'vuelo' => 'AM4321',
                'horario_salida' => '09:15',
                'horario_llegada' => '11:00',
                'precio' => 2000.00,
            ],
            [
                'origen' => 'Cancún',
                'destino' => 'Monterrey',
                'fecha_salida' => '2024-12-18',
                'fecha_regreso' => '2024-12-22',
                'asientos' => 1,
                'clase' => 'ejecutiva',
                'aerolinea' => 'VivaAerobus',
                'vuelo' => 'VB3456',
                'horario_salida' => '16:00',
                'horario_llegada' => '18:30',
                'precio' => 2500.00,
            ],
            [
                'origen' => 'Tijuana',
                'destino' => 'Guadalajara',
                'fecha_salida' => '2024-12-08',
                'fecha_regreso' => '2024-12-12',
                'asientos' => 6,
                'clase' => 'primera',
                'aerolinea' => 'Volaris',
                'vuelo' => 'VO7890',
                'horario_salida' => '07:45',
                'horario_llegada' => '09:30',
                'precio' => 4000.00,
            ],
        ]);
    }
}
