<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    //il s'agit de faire la liaison avec la base de donnée
    
    use HasFactory;
    protected $guarded =[];
    protected $table='student';//pour verifier la liaison entre les models
}
