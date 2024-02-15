<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    use HasFactory;

    private $listaCompras;

    public function __construct()
    {
        $this->listaCompras = [];
    }

    public function addItem(string $item)
    {
        $this->listaCompras[] = $item;
        return $item;
    }

    public function getItems()
    {
        return $this->listaCompras;
    }

    public function removeItem(int $id)
    {
        if(isset($this->listaCompras[$id])){
            unset($this->listaCompras[$id]);
        }
    }

    public function clearItems()
    {
        $this->listaCompras = [];
    }
}
