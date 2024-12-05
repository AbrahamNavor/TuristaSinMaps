<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hotelesSeeders extends Seeder
{
    public function run(): void
    {

        DB::table('registro_hoteles')->insert([
            [
                'nombre' => 'Hotel Paraíso Cancún',
                'direccion' => 'Blvd. Kukulcán, Km 11, Zona Hotelera, Cancún, Q.R.',
                'telefono' => '9981234567',
                'habitaciones' => 50,
                'categoria' => '5 Estrellas',
                'servicios' => 'WiFi, Piscina, Spa, Restaurante, Gimnasio',
                'precio' => 4500,
                'descripcion' => 'Hotel de lujo frente al mar con habitaciones modernas y espectaculares vistas al Caribe.',
                'politicas' => 'Check-in a las 15:00, check-out a las 12:00, cancelaciones gratuitas hasta 48 horas antes.'
            ],
            [
                'nombre' => 'Hotel Ejecutivo CDMX',
                'direccion' => 'Av. Reforma 101, Centro, Ciudad de México, CDMX',
                'telefono' => '5512345678',
                'habitaciones' => 30,
                'categoria' => '4 Estrellas',
                'servicios' => 'WiFi, Centro de Negocios, Restaurante, Desayuno Incluido',
                'precio' => 2500,
                'descripcion' => 'Hotel ideal para viajes de negocios, ubicado en el corazón de la Ciudad de México.',
                'politicas' => 'No se permiten mascotas. Cancelaciones gratuitas hasta 24 horas antes.'
            ],
            [
                'nombre' => 'Hotel Familiar Acapulco',
                'direccion' => 'Costera Miguel Alemán 445, Acapulco, Guerrero',
                'telefono' => '7449876543',
                'habitaciones' => 40,
                'categoria' => '3 Estrellas',
                'servicios' => 'Piscina, WiFi, Estacionamiento Gratuito, Restaurante',
                'precio' => 1800,
                'descripcion' => 'Un hotel cómodo y económico para familias, cerca de las playas de Acapulco.',
                'politicas' => 'Mascotas pequeñas permitidas. Check-in a las 14:00, check-out a las 11:00.'
            ],
            [
                'nombre' => 'Hotel Boutique Querétaro',
                'direccion' => 'Calle 5 de Mayo 12, Centro Histórico, Querétaro, QRO',
                'telefono' => '4427654321',
                'habitaciones' => 12,
                'categoria' => '5 Estrellas',
                'servicios' => 'WiFi, Restaurante Gourmet, Servicio a la Habitación, Spa',
                'precio' => 3800,
                'descripcion' => 'Experiencia boutique en el corazón del Centro Histórico de Querétaro.',
                'politicas' => 'Cancelaciones no reembolsables. Solo adultos.'
            ],
            [
                'nombre' => 'EcoHotel Chiapas',
                'direccion' => 'Carretera Palenque 45, Chiapas',
                'telefono' => '9618765432',
                'habitaciones' => 20,
                'categoria' => '2 Estrellas',
                'servicios' => 'WiFi, Estacionamiento, Tours Ecológicos',
                'precio' => 1200,
                'descripcion' => 'Hotel sustentable rodeado de naturaleza, ideal para amantes del ecoturismo.',
                'politicas' => 'Check-in a las 13:00, check-out a las 11:00. No se permiten cancelaciones.'
            ],
            [
                'nombre' => 'Hotel Vista Pacifica',
                'direccion' => 'Calle del Mar 23, Mazatlán, Sinaloa',
                'telefono' => '6696543210',
                'habitaciones' => 25,
                'categoria' => '4 Estrellas',
                'servicios' => 'Piscina, Restaurante, WiFi, Estacionamiento Privado',
                'precio' => 3000,
                'descripcion' => 'Un hotel con vistas espectaculares al Pacífico, perfecto para vacaciones relajantes.',
                'politicas' => 'No se permiten mascotas. Cancelación gratuita con 3 días de anticipación.'
            ]
        ]);
    }
}
