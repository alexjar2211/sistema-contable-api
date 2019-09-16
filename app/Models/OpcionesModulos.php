<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpcionesModulos extends Model
{
	protected $table = "gv_opciones";
	protected $primaryKey = "id_opcion";
	public $timestamps = false;
}
