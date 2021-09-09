<?php


abstract class Sequence
{
    abstract function put(string $item) : void;
    abstract function get() : ?string;
    abstract function isEmpty() : bool;
}