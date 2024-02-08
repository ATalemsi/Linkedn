<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreEmploi extends Model
{
    use HasFactory;
    protected $fillable = ['entreprise_id', 'titre', 'description', 'competences_requises', 'type_contrat', 'emplacement'];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function candidatures()
    {
        return $this->belongsToMany(Candidature::class, 'offre_emploi_candidature');
    }
}
