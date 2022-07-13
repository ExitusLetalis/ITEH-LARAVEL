<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teniser;
use App\Models\Teren;

class Trening extends Model
{
    use HasFactory;

    protected $fillable = [
        'datum',
        'vreme',
        'teniser_id',
        'teren_id'
    ];

    public function teniser()
    {
        return $this->belongsTo(Teniser::class);
    }

    public function teren()
    {
        return $this->belongsTo(Teren::class);
    }
}
