<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soma extends Model
{
    use HasFactory;

    public function soma(int $a, int $b)
    {
        return $a + $b;
    }
}
