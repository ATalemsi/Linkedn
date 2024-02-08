<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = ['nom','user_id', 'logo', 'slogan', 'industrie', 'description'];

    public function offresEmploi()
    {
        return $this->hasMany(OffreEmploi::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
