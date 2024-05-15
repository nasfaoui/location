<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $table = 'voitures';
    protected $primaryKey = 'N_Voiture';
    protected $fillable = ['Marque', 'Modele', 'Cost_Par_Jour', 'N_Parking', 'N_Client', 'availability'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'N_Client');
    }

    public function parking()
    {
        return $this->belongsTo(Parking::class, 'N_Parking');
    }
}
