<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users = [
                    [
                        'id'             => 1,
                        'name'           => 'Admin',
                        'email'          => 'admin@admin.com',
                        'password'       => '123456789',
                        'remember_token' => null,
                        'created_at'     => '2019-01-01 00:00:00',
                        'updated_at'     => '2019-01-01 00:00:00',
                        'area'          => 1,
                    ],
                    [
                        'id'             => 2,
                        'name'           => 'Usuario de carga de documentos',
                        'email'          => '' ,
                        'password'       => '123456789',
                        'remember_token' => null,
                        'created_at'     => '2019-01-01 00:00:00',
                        'updated_at'     => '2019-01-01 00:00:00',
                        'area'          => 1,
                    [
                        'id'             => 2,
                        'name'           => 'Agent 1 / Sistemas',
                        'email'          => 'agent1@agent1.com',
                        'password'       => '$2y$12$m4dpS7iTleQqUanHPZs0eORQKVAY4GYM.wxwTJkIecihhxQTTDb0i',
                        'remember_token' => null,
                        'created_at'     => '2019-01-01 00:00:00',
                        'updated_at'     => '2019-01-01 00:00:00',
                        'area'          => 2,   
                    ],
                    [
                        'id'             => 3,
                        'name'           => 'Agent 2 / Gestion Ambiental',
                        'email'          => 'agent2@agent2.com',
                        'password'       => '$2y$12$m4dpS7iTleQqUanHPZs0eORQKVAY4GYM.wxwTJkIecihhxQTTDb0i',
                        'remember_token' => null,
                    ],
                    [
                        'id'             => 4,
                        'name'           => 'Agent 3 / Infraestructura',
                        'email'          => 'agent3@agent3.com',
                        'password'       => '$2y$12$m4dpS7iTleQqUanHPZs0eORQKVAY4GYM.wxwTJkIecihhxQTTDb0i',
                        'remember_token' => null,
                    ],

                    ]       
                ];
            
                user::insert($users);
            }
        }
