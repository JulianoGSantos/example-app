<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    public $timestamps = false;

    public $fillable = [
        
        'name',
        'cpf',
        'rg',
        'street',
        'number',
        'district',
        'city',
        'fone',
        'celfone'
    ];
}
