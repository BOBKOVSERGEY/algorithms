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

    }

    function isEmpty(): bool
    {

    }
}