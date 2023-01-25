<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Asignatura extends Model
{
    use HasFactory;
    protected $table = 'asignaturas';
    protected $primaryKey = 'codAs';
    public $timestamps = false;
    protected $fillable = ['nombreAs', 'nombrecortoAs', 'profesorAs', 'colorAs', 'user_id'];

    public function obtenerAsignaturas()
    {
        return Asignatura::all()->where('user_id', "=" , Auth::user()->id);
    }

    public function obtenerAsignaturaPorId($id)
    {
        return Asignatura::find($id);
    }
    
}
