<?php
include __DIR__ . '/class/Node.php';
include __DIR__ . '/class/Sequence.php';
include __DIR__ . '/class/Stack.php';

include __DIR__ . '/class/Queue.php';
include __DIR__ . '/class/Graph.php';
include __DIR__ . '/class/Walker.php';

$graph = new Graph();
$graph->addNode('A');
$graph->addNode('B');
$graph->addNode('C');
$graph->addNode('D');
$graph->addNode('E');
$graph->addNode('F');
$graph->addNode('G');

$graph->addEdge('A', 'B', 2);
$graph->addEdge('A', 'C', 3);
$graph->addEdge('A', 'D', 6);
$graph->addEdge('B', 'C', 4);
$graph->addEdge('B', 'E', 9);
$graph->addEdge('C', 'D', 1);
$graph->addEdge('C', 'E', 7);
$graph->addEdge('C', 'F', 6);
$graph->addEdge('D', 'F', 4);
$graph->addEdge('E', 'F', 1);
$graph->addEdge('E', 'G', 5);
$graph->addEdge('F', 'G', 8);

foreach ($graph->getNodes() as $node)
    echo $node . '<br>';
$node1 = 'A';
foreach ($graph->getEdges($node1) as $node2 => $length)
    echo $node1 . '-' . $node2 . ' '. $length . '<br>';
echo "===========<br>\n";

$walker = new Walker($graph);
$walker->walkDepth1('C');
echo '<pre>';
print_r($walker->path);
echo '</pre>';
/*
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
*/

