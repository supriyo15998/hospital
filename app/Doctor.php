<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hospital;
class Doctor extends Model
{
    protected $guarded = [];
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
