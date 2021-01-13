<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Values extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    protected $casts = [
        'value' => 'integer',
    ];

    public static function updateValues(Request $request)
    {
        foreach ($request->all() as $key => $value) {
            self::whereName($key)->update(compact('value'));
        }
    }

    public static function parse(string $tags): array
    {
        return preg_split('/ ?[,|] ?/', $tags);
    }
}
