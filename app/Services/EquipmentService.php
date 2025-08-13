<?php

namespace App\Services;

use App\Models\Equipment;

class EquipmentService
{
	private int $paginate = 24;

	public function paginate(int $paginate = 24)
	{
		return Equipment::query()->paginate($paginate);
	}

	public function create(array $data): Equipment
	{
		return Equipment::query()
        	->create($data);
	}

	public function find(int $id): Equipment
	{
		return Equipment::query()
        	->find($id);
	}

	public function all()
	{
		return Equipment::query()
			->get(['id', 'name']);
	}

}