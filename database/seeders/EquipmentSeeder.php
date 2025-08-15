<?php

namespace Database\Seeders;

use App\Services\EquipmentService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
	private const EQUIPMENTS = [
		['id' => 1, 'name' => 'Экскаватор №1']
	];
	
    public function run(): void
    {
    	foreach (self::EQUIPMENTS as $item) {
    		(new EquipmentService)->create($item);
    	}
    }
}
