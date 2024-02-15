<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCompetence
 */
class Competence extends Model
{
    use HasFactory;
    protected $fillable = ['cv_id', 'nom', 'niveau'];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }
}
