<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    protected $table = 'contrats';
    protected $primaryKey = 'N_Contrat';
    protected $fillable = ['N_Client', 'Immatriculation', 'Type', 'Date_D', 'Date_R'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'N_Client');
    }
}
