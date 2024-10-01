<?php

namespace App\Models;

use App\Models\activite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorie extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function categorie()
    {
        return $this->belongsTo(activite::class);
    }
}
