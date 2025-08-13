<?php

namespace App\Services;

use App\Models\RefusalNature;

class RefusalNatureService
{
	private int $paginate = 24;

	public function paginate(int $paginate = 24)
	{
		return RefusalNature::query()->paginate($paginate);
	}

	public function create(array $data): RefusalNature
	{
		return RefusalNature::query()
        	->create($data);
	}

	public function all()
	{
		return RefusalNature::query()
			->get(['id', 'name']);
	}
}