<?php

namespace App\Services;

use App\Models\Downtime;

class DowntimeService
{
	private int $paginate = 24;

	public function paginate(int $paginate = 24)
	{
		return Downtime::query()->paginate($paginate);
	}
	
	public function create(array $data): Downtime
	{
		return Downtime::query()
        	->create($data);
	}

	public function all()
	{
		return Downtime::query()
			->get(['id', 'name']);
	}
}