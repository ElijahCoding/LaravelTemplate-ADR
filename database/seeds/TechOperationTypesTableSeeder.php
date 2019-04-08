<?php

use Illuminate\Database\Seeder;
use App\Models\Tech\Type\TechOperationType;

class TechOperationTypesTableSeeder extends Seeder
{
    public function run()
    {
        $types = [
            [
                'en' => 'field',
                'ru' => 'Работы на поле'
            ],
            [
                'en' => 'transafer',
                'ru' => 'Работы по транспортировке'
            ],
            [
                'en' => 'time',
                'ru' => 'Временные работы'
            ]
        ];

        foreach ($types as $type) {
            TechOperationType::create($type);
        }
    }
}
