<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    Const LMV = 1;
    Const MJS = 2;

    public function predial()
    {
        return $this->hasOne(Predial::class);
    }
}
