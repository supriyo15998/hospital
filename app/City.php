<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hospital;
class City extends Model
{
    protected $guarded = [];
    public function hospitals()
    {
        return $this->hasMany(Hospital::class);
    }
}
