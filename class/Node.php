<?php


class Node
{
    /** @string**/
    private $item;
    private $next;

    // ожидается строеа и элемент класса Node ? - неопределенного типа
    public function __construct(string $item, ?Node $next = null)
    {
        $this->item = $item;
        $this->next = $next;
    }

    // вернет строчку которую мы сохранили
    public function getItem() : string
    {
        return $this->item;
    }

    public function getNext() : ?Node
    {
        return $this->next;
    }

    // void - функция ничего возвращать не будет
    public function setNext(Node $node) : void
    {
        $this->next = $node;
    }
}