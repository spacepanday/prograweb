<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    //
	protected $fillable = ['titulo', 'imagen', 'idautor', 'ideditorial', 'idcategoria', 'idestadolibro'];
}
