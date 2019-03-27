<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Values extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    protected $casts = [
        'value' => 'integer',
    ];
}
