<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperLangueMaitrisee
 */
class LangueMaitrisee extends Model
{
    use HasFactory;
    protected $fillable = ['cv_id', 'langue', 'niveau'];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }
}
