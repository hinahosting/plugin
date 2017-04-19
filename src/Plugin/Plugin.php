<?php

namespace HinaPlugin\Plugin;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    protected $table = 'plugins';

    protected $fillable = ['title', 'path', 'data'];

    protected function getDataAttribute($value)
    {
        return json_encode($value);
    }
}
