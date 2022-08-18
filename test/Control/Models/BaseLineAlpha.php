<?php

namespace Weald\Test\Control\Models;

use Database\Factories\BaseLineAlphaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseLineAlpha extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return BaseLineAlphaFactory::new();
    }
}
