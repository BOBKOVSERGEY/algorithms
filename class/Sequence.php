<?php


abstract class Sequence
{
    abstract function put(string $item) : void;
    abstract function get() : ?string;
    abstract protected function getFirst() : ?Node;
    public function isEmpty() : bool
    {
        return $this->getFirst() == null;
    }

    //
    public function getList() :iterable
    {
        $curr = $this->getFirst();

        while ($curr != null) {
            yield $curr->getItem();
            $curr = $curr->getNext();
        }
    }

    public function contains(string $item) :bool
    {
        foreach ($this->getList() as $curr)
            if($curr == $item)
                return true;
            return false;
    }
}