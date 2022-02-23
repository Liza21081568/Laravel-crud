<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{

protected $table = 'posts';
//primary key 
public $primarykey = 'id';

public $timestamps  = 'true';

public function user(){
    return $this->belongsTo('App\Models\User');
}
}
