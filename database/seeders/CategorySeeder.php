<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = [
            [
                'name' => 'Книга',
                'children' => [
                    [    
                                                            'name' => 'комикс',
                        'children' => [
                                                                            ['name' => 'Комикс Мануэя'],
                                                                            ['name' => 'Романтический комикс'],
                                                                            ['name' => 'Action Comic Book'],
                        ],
                    ],
                    [    
                                                            'name' => 'Учебник',
                            'children' => [
                                                                            ['name' => 'Business'],
                                                                            ['name' => 'Финансы'],
                                                                            ['name' => 'Computer Science'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'электрические приборы',
                    'children' => [
                    [
                                                            'name' => 'TV',
                        'children' => [
                                                                    ['name' => 'Display'],
                                                                    ['name' => 'Blu-ray'],
                        ],
                    ],
                    [
                                                            'name' => 'мобильный телефон',
                        'children' => [
                                                                    ['name' => 'Huawei'],
                            ['name' => 'iPhone'],
                                                                    ['name' => 'Xiaomi'],
                        ],
                    ],
                ],
            ]      
        ];


        \App\Models\Category::create($shops);

    }
}
