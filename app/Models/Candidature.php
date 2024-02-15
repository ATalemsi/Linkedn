<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperCandidature
 */
class Candidature extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['photo_profil', 'titre','user_id','poste_actuel','industrie','adresse','informations_contact','a_propos'];
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($candidate) {
            $candidate->user()->delete();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function offresEmploi()
    {
        return $this->belongsToMany(OffreEmploi::class, 'offre_emploi_candidatures', 'candidature_id', 'offre_emploi_id');
    }

}
