<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;
use App\Bed;
use App\Department;
use App\Doctor;
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
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
