<?php

namespace Tests\Unit;

use App\Models\ShoppingList;
use PHPUnit\Framework\TestCase;

    class ShoppingListTest extends TestCase
    {

        // Ex1)a) O proposito da classe ShoppingList é ter os metodos solicitados para adicionar, listar e remover os itens da lista

        /* Ex1)b) Construtor: Vai transformar meu atributo em um array vazio

                  addItem(): Metodo responsavel por adicionar um item a lista
                  getItems(): Metodo que retorna esse array
                  removeItem(): Metodo que verifica se tem alguma coisa na posiçao informada, se tiver ele da unset
        */   

        // Ex1)c) Eu crio uma instância do objeto e uso meu metodo para adicionar 2 itens na lista e depois no assertEquals()
        // é verificado se o valor esperado é o mesmo que foi adicionado

        // Ex1)d) É criada uma instancia e eu adiciono 2 itens, depois eu removo o item que esta na primeira posição(banana) e ele verifica se o item na posição 1 é a maça
        public function testAddItem()
        {
            $lista = new ShoppingList();
            $addItem1 = $lista->addItem("Banana");
            $addItem2 = $lista->addItem("Maça");
            $this->assertEquals("Banana", $addItem1);
            $this->assertEquals("Maça", $addItem2);
        }

        public function testGetItems()
        {
            $lista = new ShoppingList();
            $lista->addItem("Banana");
            $lista->addItem("Maça");
            $items = $lista->getItems();
            $this->assertEquals("Banana", $items[0]);
            $this->assertEquals("Maça", $items[1]);
        }

        public function testRemoveItem()
        {
            $lista = new ShoppingList();
            $lista->addItem("Banana");
            $lista->addItem("Maça");
            $lista->removeItem(0);
            $items = $lista->getItems();
            $this->assertEquals("Maça", $items[1]);
        }
       
    }

?> 