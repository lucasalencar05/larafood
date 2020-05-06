<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPlan extends Model
{
    protected $table = 'details_plans';

    protected $fillable = ['name'];

    public function plan()
    {
       $this->belongsTo(plan::class);
    }
}
