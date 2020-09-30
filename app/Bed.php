<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hospital;
class Bed extends Model
{
    protected $guarded = [];
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
