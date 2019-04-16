<?php

use Illuminate\Database\Seeder;
use App\Models\Permissions\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            'Директор холдинга', 'Директор СХП',
            'Бухгалтер СХП', 'Главный агроном',
            'Агроном', 'Учетчик', 'Начальник СБ',
            'Сотрудник СБ', 'Менеджер закупок',
            'Главный инженер', 'Инженер'
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }
    }
}
