<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReplacedElement extends Model
{
    protected $fillable = [
    	'repair_id',
    	'equipment_id',
    	'element_id',
    	'operating_time',
    ];

    public function repair()
    {
    	return $this->belongsTo(Repair::class);
    }

    public function equipment()
    {
    	return $this->belongsTo(Equipment::class);
    }

    public function element()
    {
    	return $this->belongsTo(Element::class);
    }
}
