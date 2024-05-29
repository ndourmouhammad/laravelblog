<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = ['contenu', 'nom_complet_auteur', 'date_heure_creation', 'article_id'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}

