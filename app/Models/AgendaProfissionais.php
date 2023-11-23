<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaProfissionais extends Model
{
    use HasFactory;

    protected $fillable =[
    
        'profissional_id',
         'dataHora',
          
    ];
}