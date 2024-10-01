<?php

namespace App\Models;

use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class activite extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = ["images" => 'array'];
    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
}
