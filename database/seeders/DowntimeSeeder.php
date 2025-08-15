<?php

namespace Database\Seeders;

use App\Services\DowntimeService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DowntimeSeeder extends Seeder
{
	private const DOWNTIMES = [
	    ['id' => 1, 'equipment_id' => 1, 'downtime_reason_id' => 1,  'begin_at' => '2024-08-12 12:00:00', 'ended_at' => '2024-08-16 14:00:00'], // Поломка двигателя
	    ['id' => 2, 'equipment_id' => 1, 'downtime_reason_id' => 13, 'begin_at' => '2024-08-16 14:30:00', 'ended_at' => '2024-08-20 09:00:00'], // Ожидание запчастей
	    ['id' => 3, 'equipment_id' => 1, 'downtime_reason_id' => 9,  'begin_at' => '2024-08-21 08:00:00', 'ended_at' => '2024-08-21 18:00:00'], // Плановое ТО
	    ['id' => 4, 'equipment_id' => 1, 'downtime_reason_id' => 8,  'begin_at' => '2024-09-03 10:00:00', 'ended_at' => '2024-09-04 15:00:00'], // Проблемы с системой охлаждения
	    ['id' => 5, 'equipment_id' => 1, 'downtime_reason_id' => 14, 'begin_at' => '2024-09-05 09:00:00', 'ended_at' => '2024-09-06 12:00:00'], // Погодные условия
	    ['id' => 6, 'equipment_id' => 1, 'downtime_reason_id' => 7,  'begin_at' => '2024-09-14 13:00:00', 'ended_at' => '2024-09-15 16:30:00'], // Авария на топливной системе
	    ['id' => 7, 'equipment_id' => 1, 'downtime_reason_id' => 12, 'begin_at' => '2024-09-20 08:00:00', 'ended_at' => '2024-09-20 12:00:00'], // Нехватка топлива
	    ['id' => 8, 'equipment_id' => 1, 'downtime_reason_id' => 16, 'begin_at' => '2024-09-21 09:30:00', 'ended_at' => '2024-09-21 13:00:00'], // Ожидание разгрузки
	    ['id' => 9, 'equipment_id' => 1, 'downtime_reason_id' => 11, 'begin_at' => '2024-09-25 08:00:00', 'ended_at' => '2024-09-25 17:00:00'], // Отсутствие оператора
	    ['id' => 10,'equipment_id' => 1, 'downtime_reason_id' => 18, 'begin_at' => '2024-09-30 14:00:00', 'ended_at' => '2024-10-02 11:00:00'], // Инцидент/авария
	];

    public function run(): void
    {
        foreach (self::DOWNTIMES as $item) {
        	(new DowntimeService)->create($item);
        }
    }
}
