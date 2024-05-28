<?php

namespace App\Models;

use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    protected $fillable = ['nom', 'description', 'image_url', 'date_creation', 'a_la_une'];

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}

