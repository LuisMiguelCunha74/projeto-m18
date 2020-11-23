<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    use HasFactory;
    
    protected $primaryKey='id_filme';
        
    protected $table='filmes';
    
    function gen(){
        return $this->belongsTo(
          'App\Models\Generos',
            'id_genero'
        );
    }
    
    function atore(){
        return $this->belongsTo(
        'App\Models\Atores',
            'id_ator'
        );
    }
}
