<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call (areaTable::class);
       $this->call (user::class);
       $this->call (role::class);
       $this->call (cargo::class);
       $this->call (categoria::class);   
    }
}
