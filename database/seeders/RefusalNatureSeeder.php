<?php

namespace Database\Seeders;

use App\Services\RefusalNatureService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefusalNatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	foreach ($this->getData() as $item) {
    		(new RefusalNatureService)->create($item);
    	}
    }

    public function getData(): array
    {
    	return [
    		['id' => 1, 'name' => 'Износ уплотнений, утечки, кавитация', 'cause' => 'Износной характер, ресурсные отказы', 'recommended_model' => 1],
    		['id' => 2, 'name' => 'Разрушение зубьев, подшипников', 'cause' => 'Усталость, кумулятиыный износ', 'recommended_model' => 2],
    		['id' => 3, 'name' => 'Усталостные отказы, износ', 'cause' => 'Старение и накопление повреждений', 'recommended_model' => 3],
    		['id' => 4, 'name' => 'Износ, кавитация, загрязнение', 'cause' => 'Детская смертность + износ', 'recommended_model' => 2],
    		['id' => 5, 'name' => 'Случайные отказы, скачки напряжения', 'cause' => 'Постоянная интенсивность отказов', 'recommended_model' => 4],
    		['id' => 6, 'name' => 'Трещины, разрушение от усталости', 'cause' => 'Механическое сарение', 'recommended_model' => 5],
    		['id' => 7, 'name' => 'Износ роликов, растяжение траков', 'cause' => 'Постепенное старение', 'recommended_model' => 1],
    		['id' => 8, 'name' => 'Износ по ресурсу', 'cause' => 'Наработка до отказа распределена', 'recommended_model' => 1]
    	];
    }
}
