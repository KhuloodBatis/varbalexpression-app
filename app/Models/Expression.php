<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expression extends Model
{
    use HasFactory;

    public static function make()
    {
        return new static;
    }

    public function find($value)
    {// /http/
       return '/'.$value.'/';
    }

    public function then($value)
    {
       return $this->find($value);
    }

    public function anything()
    {// /no/
    return '/'.'.*'.'/';

    }

    public function maybe($value)
    {// /(http)?/
    return '/('.$value.')?/';

    }
}
