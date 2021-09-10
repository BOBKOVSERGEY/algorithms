<?php
// очередь

class Queue extends Sequence
{
    /** @var Node*/
    private $head;
    /** @var Node*/
    private $last;

    function put(string $item): void
    {
        $node = new Node($item);
        if ($this->isEmpty()) {
            $this->head = $node;
            $this->last = $node;
        } else {
            $this->last->setNext($node);
            $this->last = $node;
        }
    }

    function get(): ?string
    {
        if($this->isEmpty()) return null;
        $item = $this->head->getItem();
        $this->head = $this->head->getNext();
        return $item;
    }

    protected function getFirst() : ?Node
    {
        return $this->head;
    }
}