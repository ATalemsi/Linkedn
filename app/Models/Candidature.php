<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $fillable = ['photo_profil', 'titre','user_id','industrie','adresse','informations_contact','a_propos'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function offresEmploi()
    {
        return $this->belongsToMany(OffreEmploi::class, 'offre_emploi_candidature');
    }
}
