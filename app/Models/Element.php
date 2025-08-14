<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $fillable = [
    	'name',
    	'equipment_id',
    	'refusal_nature_id',
    	'parent_id',
    	'installed_at',
    ];

    public function equipment()
    {
    	return $this->belongsTo(Equipment::class);
    }

    public function parent()
    {
    	return $this->belongsTo(self::class, 'id', 'parent_id');
    }
}
