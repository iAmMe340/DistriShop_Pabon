<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'titulo' => 'Gerencia',
            ],
            [
                'id'    => 2,
                'titulo' => 'Sub-gerencia',
            ],
            [
                'id'    => 3,
                'titulo' => 'Coordinador',
            ],
            [
                'id'    => 4,
                'titulo' => 'Lider de área',
            ],

        ];

        role::insert($roles);
    }
}
