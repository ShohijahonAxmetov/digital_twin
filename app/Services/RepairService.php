<?php

namespace App\Services;

use App\Models\Repair;

class RepairService
{
	private int $paginate = 24;

	public function paginate(int $paginate = 24)
	{
		return Repair::query()->paginate($paginate);
	}
	
	public function create(array $data): Repair
	{
		return Repair::query()
        	->create($data);
	}

	public function findById(int $id): Repair
	{
		return Repair::query()
        	->findOrFail($id);
	}

	public function all()
	{
		return Repair::query()
			->get(['id', 'name']);
	}
}