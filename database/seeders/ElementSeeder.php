<?php

namespace Database\Seeders;

use App\Services\ElementService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElementSeeder extends Seeder
{
	private const ELEMENTS = [
	    // Основные узлы
	    ['id' => 1,  'equipment_id' => 1, 'refusal_nature_id' => 1, 'parent_id' => null, 'name' => 'Гидравлический насос', 'installed_at' => '2024-01-15 09:00:00'],
	    ['id' => 2,  'equipment_id' => 1, 'refusal_nature_id' => 2, 'parent_id' => null, 'name' => 'Главный редуктор', 'installed_at' => '2024-02-10 10:00:00'],
	    ['id' => 3,  'equipment_id' => 1, 'refusal_nature_id' => 3, 'parent_id' => null, 'name' => 'Двигатель', 'installed_at' => '2024-01-05 08:30:00'],
	    ['id' => 4,  'equipment_id' => 1, 'refusal_nature_id' => 4, 'parent_id' => null, 'name' => 'Топливный насос', 'installed_at' => '2024-03-02 11:00:00'],
	    ['id' => 5,  'equipment_id' => 1, 'refusal_nature_id' => 5, 'parent_id' => null, 'name' => 'Генератор', 'installed_at' => '2024-03-15 14:00:00'],

	    // Дочерние элементы гидросистемы
	    ['id' => 6,  'equipment_id' => 1, 'refusal_nature_id' => 1, 'parent_id' => 1, 'name' => 'Уплотнительное кольцо насоса', 'installed_at' => '2024-01-15 09:00:00'],
	    ['id' => 7,  'equipment_id' => 1, 'refusal_nature_id' => 4, 'parent_id' => 1, 'name' => 'Фильтр гидравлики', 'installed_at' => '2024-02-05 10:30:00'],

	    // Дочерние элементы главного редуктора
	    ['id' => 8,  'equipment_id' => 1, 'refusal_nature_id' => 2, 'parent_id' => 2, 'name' => 'Шестерня главного редуктора', 'installed_at' => '2024-02-10 10:00:00'],
	    ['id' => 9,  'equipment_id' => 1, 'refusal_nature_id' => 2, 'parent_id' => 2, 'name' => 'Подшипник редуктора', 'installed_at' => '2024-02-10 10:00:00'],

	    // Дочерние элементы двигателя
	    ['id' => 10, 'equipment_id' => 1, 'refusal_nature_id' => 6, 'parent_id' => 3, 'name' => 'Коленчатый вал', 'installed_at' => '2024-01-05 08:30:00'],
	    ['id' => 11, 'equipment_id' => 1, 'refusal_nature_id' => 3, 'parent_id' => 3, 'name' => 'Поршень', 'installed_at' => '2024-01-05 08:30:00'],

	    // Дочерние элементы топливного насоса
	    ['id' => 12, 'equipment_id' => 1, 'refusal_nature_id' => 4, 'parent_id' => 4, 'name' => 'Плунжерная пара', 'installed_at' => '2024-03-02 11:00:00'],
	    ['id' => 13, 'equipment_id' => 1, 'refusal_nature_id' => 8, 'parent_id' => 4, 'name' => 'Топливный фильтр', 'installed_at' => '2024-03-02 11:00:00'],

	    // Дочерние элементы генератора
	    ['id' => 14, 'equipment_id' => 1, 'refusal_nature_id' => 5, 'parent_id' => 5, 'name' => 'Ротор генератора', 'installed_at' => '2024-03-15 14:00:00'],
	    ['id' => 15, 'equipment_id' => 1, 'refusal_nature_id' => 5, 'parent_id' => 5, 'name' => 'Статор генератора', 'installed_at' => '2024-03-15 14:00:00'],

	    // Ходовая часть
	    ['id' => 16, 'equipment_id' => 1, 'refusal_nature_id' => 7, 'parent_id' => null, 'name' => 'Гусеничная лента', 'installed_at' => '2024-02-20 09:00:00'],
	    ['id' => 17, 'equipment_id' => 1, 'refusal_nature_id' => 7, 'parent_id' => 16, 'name' => 'Траки гусеницы', 'installed_at' => '2024-02-20 09:00:00'],
	    ['id' => 18, 'equipment_id' => 1, 'refusal_nature_id' => 7, 'parent_id' => 16, 'name' => 'Ролики опорные', 'installed_at' => '2024-02-20 09:00:00'],

	    // Система охлаждения
	    ['id' => 19, 'equipment_id' => 1, 'refusal_nature_id' => 1, 'parent_id' => null, 'name' => 'Радиатор', 'installed_at' => '2024-04-01 08:00:00'],
	    ['id' => 20, 'equipment_id' => 1, 'refusal_nature_id' => 4, 'parent_id' => 19, 'name' => 'Вентилятор охлаждения', 'installed_at' => '2024-04-01 08:00:00'],
	]; 

    public function run(): void
    {
        foreach (self::ELEMENTS as $item) {
        	(new ElementService)->create($item);
        }
    }
}
