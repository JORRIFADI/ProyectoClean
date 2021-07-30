<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mproyecto extends Model
{
    use HasFactory;
    protected $table = 'proyectos';


    public function cliente(){

       // $cliente = mcliente::find($this->clientes_id);
        return $this->belongsTo(mcliente::class);
    }
}
