<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCursusEducatif
 */
class CursusEducatif extends Model
{
    use HasFactory;
    protected $fillable = ['cv_id', 'diplome', 'etablissement', 'date_obtention'];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }
}
