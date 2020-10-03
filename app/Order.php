<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function scopeStatus($query,$status)
    {
        return $query->where('status',$status);
    }
}
