<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hospital;
class Department extends Model
{
    protected $guarded = [];
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
