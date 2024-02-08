<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceProfessionnelle extends Model
{
    use HasFactory;

    protected $fillable = ['cv_id', 'poste', 'entreprise', 'date_debut', 'date_fin'];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }
}
