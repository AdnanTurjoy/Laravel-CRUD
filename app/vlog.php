<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vlog extends Model
{
    protected $fillable= [
       'id','title','description' ,'photo',
    ];
}
