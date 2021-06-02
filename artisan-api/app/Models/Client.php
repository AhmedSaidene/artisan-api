<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'adresse',
        'cp',
        'ville',
        'tel',
        'typeClient_id',
        'entreprise_id'
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
