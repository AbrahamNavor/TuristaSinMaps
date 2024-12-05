<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class usuariosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('registros')->insert([
            [
                'nombre' => 'Abraham',
                'apellido' => 'Navor',
                'email' => 'admin@example.com',
                'telefono' => '1234234234',
                'contraseña' => 'admin123',
            ],
            [
                'nombre' => 'Juan',
                'apellido' => 'Perez',
                'email' => 'juan@example.com',
                'telefono' => '1234567890',
                'contraseña' => 'juan123',
            ],
            [
                'nombre' => 'Maria',
                'apellido' => 'Gonzalez',
                'email' => 'mari@example.com',
                'telefono' => '0987654321',
                'contraseña' => 'mari123',
            ]
        ]);
    }
}
