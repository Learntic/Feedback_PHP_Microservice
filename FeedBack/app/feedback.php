<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario', 'id_curso', 'opinion', 'nota'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
