<?php

namespace Weald\Test\Control\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\BaseLineAlphaFactory;

class BaseLineAlpha extends Model
{

	use HasFactory;

 	protected static function newFactory()
 	{
 		return BaseLineAlphaFactory::new();
 	}

}
