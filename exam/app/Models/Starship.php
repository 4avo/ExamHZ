<?php

namespace App\Models;

use App\Models\Firmware;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Starship extends Model
{
    use HasFactory;

    public function firmwares(): HasMany {
        return $this->hasMany(Firmware::class);
    }
}
