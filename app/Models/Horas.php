<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Horas extends Model
{
    use HasFactory;
    protected $table = 'horas';
    public $timestamps = false;
    protected $fillable = ['diaH', 'horaH', 'asignatura_id'];
    protected $primaryKey = ['diaH', 'horaH', 'asignatura_id'];
    public $incrementing = false;

    protected $hidden = [ 'asignatura_id'];


    public function obtenerHoras()
    {
        return Horas::all()-> where('user_id', "=", $this->asignatura_id);
    }

    public function obtenerHoraPorId($id)
    {
        return Horas::find($id);
    }
}
