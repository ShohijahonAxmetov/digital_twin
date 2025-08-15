<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
	protected $fillable = [
		'equipment_id',
		'begin_at',
		'ended_at',
		'is_planned',
		'ignore',
	];
    
    public function equipment()
    {
    	return $this->belongsTo(Equipment::class);
    }
}
