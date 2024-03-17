<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firmware extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'version', 'lines_of_code'];

    public function starship(): BelongsTo {
        return $this->belongsTo(Starship::class);
    }

}
