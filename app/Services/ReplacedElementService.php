<?php

namespace App\Services;

use App\Models\ReplacedElement;

class ReplacedElementService
{
	private int $paginate = 24;

	public function paginate(int $paginate = 24)
	{
		return ReplacedElement::query()->paginate($paginate);
	}
	
	public function create(array $data): ReplacedElement
	{
		return ReplacedElement::query()
        	->create($data);
	}

	public function all()
	{
		return ReplacedElement::query()
			->get(['id', 'name']);
	}
}