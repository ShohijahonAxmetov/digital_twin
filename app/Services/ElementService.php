<?php

namespace App\Services;

use App\Models\Element;

class ElementService
{
	private int $paginate = 24;

	public function paginate(int $paginate = 24)
	{
		return Element::query()->paginate($paginate);
	}
	
	public function create(array $data): Element
	{
		return Element::query()
        	->create($data);
	}

	public function all()
	{
		return Element::query()
			->get(['id', 'name']);
	}
}