<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class areaTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = [
            [
                'id'    => 1,
                'nombre' => 'SISTEMAS DE INFORMACION',
            ],
            [
                'id'    => 2,
                'nombre' => 'FARMACIA Y Qx',
            ],
            [
                'id'    => 3,
                'nombre' => 'INFRAESTRUCTURA ',
            ],
            [
                'id'    => 4,
                'nombre' => 'GESTION AMBIENTAL',
            ],
        ];

        areaTable::insert($area);
        }
}
