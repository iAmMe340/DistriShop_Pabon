<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class cargo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = [
            [
                'id' => 1,
                'nombre' => 'Administrador',
                'descripcion' => 'Administrador del sistema DistriShop Pabon',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 2,
                'nombre' => 'Facturador',
                'descripcion' => 'Facturador del sistema DistriShop Pabon',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            
        ];
    }
}
