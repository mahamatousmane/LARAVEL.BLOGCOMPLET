<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $guarded=[]; //?


public function posts() //plusieurs postes appartenent à la categori
{
    return $this->hasMany(Post::class);
}
}