<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StringManipulator extends Model
{
    use HasFactory;

    public function countVowels(string $str)
    {
        $count = 0;
        $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

        $letras = str_split($str);

        foreach ($letras as $letra){
            if(in_array($letra, $vogais)){
                $count++;
            }
        }

        return $count;
    }

    public function capitalizeString(string $string)
    {
        if (empty($string)){
            return $string;
        }

        return ucwords($string);
    }

    public function concatenateStrings(string $string1, string $string2)
    {
        return $string1 . ' ' . $string2;
    }
}
