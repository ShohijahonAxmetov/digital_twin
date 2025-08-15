<?php

namespace App\Services;

use App\Models\DowntimeReason;

class DowntimeReasonService
{
	private int $paginate = 24;

	public function paginate(int $paginate = 24)
	{
		return DowntimeReason::query()->paginate($paginate);
	}
	
	public function create(array $data): DowntimeReason
	{
		return DowntimeReason::query()
        	->create($data);
	}

	public function all()
	{
		return DowntimeReason::query()
			->get(['id', 'name']);
	}
}