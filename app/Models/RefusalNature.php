<?php

namespace App\Models;

use App\Enums\RecommendedModel;
use Illuminate\Database\Eloquent\Model;

class RefusalNature extends Model
{
    protected $fillable = [
    	'name',
    	'cause',
    	'recommended_model'
    ];

    protected function casts(): array
    {
        return [
            'recommended_model' => RecommendedModel::class,
        ];
    }
}
