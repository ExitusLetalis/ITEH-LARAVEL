<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trening;

class Teren extends Model
{
    use HasFactory;

    public function treninzi()
    {
        return $this->hasMany(Trening::class);
    }
}
