<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $table = 'factures';
    protected $primaryKey = 'N_Facture';
    protected $fillable = ['Date_Facture', 'Montant', 'Montant_a_Paye', 'N_Client'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'N_Client');
    }
}
