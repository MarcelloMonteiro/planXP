<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'name' => 'QUEM SOMOS',
                'route' => 'quemsomos',
                'ordering' => 1,
            ],
            [
                'name' => 'O QUE FAZEMOS',
                'route' => 'oquefazemos',
                'ordering' => 2,
            ],
            [
                'name' => 'PLAN NEWS',
                'route' => 'plannews',
                'ordering' => 3,
            ],
            [
                'name' => 'NOSSOS CLIENTES',
                'route' => 'nossosclientes',
                'ordering' => 4,
            ],
            [
                'name' => 'CONTATO',
                'route' => 'contato',
                'ordering' => 5,
            ]
        ];
  
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}
