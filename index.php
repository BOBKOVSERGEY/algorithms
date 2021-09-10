<?php

include __DIR__ . '/class/Node.php';
include __DIR__ . '/class/Sequence.php';
include __DIR__ . '/class/Stack.php';

include __DIR__ . '/class/Queue.php';


$stack = new Stack();
$stack->put('John 1');
$stack->put('Alex 2');
$stack->put('Mike 3');

foreach ($stack->getList() as $item)
    echo $item . "<br>\n";

echo "===========<br>\n";
echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";