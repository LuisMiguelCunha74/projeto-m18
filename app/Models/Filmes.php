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
        return $this->hasMany(
          'App\Models\Generos',
            'id_genero'
        );
    }
}
