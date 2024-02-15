<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperEntreprise
 */
class Entreprise extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nom','user_id', 'logo', 'slogan', 'industrie', 'description'];
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($entreprise) {
            $entreprise->user()->delete();
            // Optionally, you can also soft delete the associated offres here
             $entreprise->offres()->delete();
        });
    }

    public function offresEmploi()
    {
        return $this->hasMany(OffreEmploi::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
