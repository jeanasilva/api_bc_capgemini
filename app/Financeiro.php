<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financeiro extends Model
{
    protected $fillable = [
        'conta_corrente', 'valor_saldo',
    ];

}
