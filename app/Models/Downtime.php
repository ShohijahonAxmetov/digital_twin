<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Downtime extends Model
{
    protected $fillable = [
    	'equipment_id',
    	'downtime_reason_id',
    	'begin_at',
    	'ended_at',
    ];

    public function equipment()
    {
    	return $this->belongsTo(Equipment::class);
    }

    public function downtimeReason()
    {
    	return $this->belongsTo(DowntimeReason::class);
    }
}
