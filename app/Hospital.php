<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;
use App\Bed;
class Hospital extends Model
{
    protected $guarded = [];
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function beds()
    {
        return $this->hasMany(Bed::class);
    }
}
