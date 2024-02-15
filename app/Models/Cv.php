<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCv
 */
class Cv extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function competences()
    {
        return $this->hasMany(Competence::class);
    }

    public function experiencesProfessionnelles()
    {
        return $this->hasMany(ExperienceProfessionnelle::class);
    }

    public function cursusEducatifs()
    {
        return $this->hasMany(CursusEducatif::class);
    }

    public function languesMaitrisees()
    {
        return $this->hasMany(LangueMaitrisee::class);
    }
}
