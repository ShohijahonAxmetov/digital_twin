<?php

namespace Database\Seeders;

use App\Services\RepairService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RepairSeeder extends Seeder
{
	private const REPAIRS = [
		[
	        'id' => 1,
	        'equipment_id' => 1,
	        'begin_at' => '2024-08-12 13:00:00', // ремонт начался в первый день простоя
	        'ended_at' => '2024-08-16 13:30:00', // закончился незадолго до окончания простоя
	        'is_planned' => 1, // плановый ремонт
	        'ignore' => 0
	    ],
	    [
	        'id' => 2,
	        'equipment_id' => 1,
	        'begin_at' => '2024-09-05 09:00:00', // второй простой
	        'ended_at' => '2024-09-07 17:00:00',
	        'is_planned' => 0, // внеплановый ремонт
	        'ignore' => 0
	    ],
	];

    public function run(): void
    {
        foreach (self::REPAIRS as $item) {
        	(new RepairService)->create($item);
        }
    }
}
