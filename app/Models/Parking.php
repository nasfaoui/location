<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $table = 'parkings';
    protected $primaryKey = 'N_Parking';
    protected $fillable = ['Capacite', 'Rue'];

    public function voitures()
    {
        return $this->hasMany(Voiture::class, 'N_Parking');
    }
}
