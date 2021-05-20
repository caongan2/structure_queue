<?php
include_once "Node.php";
include_once "Queue.php";

$queue = new Queue();
$queue->enqueue(10);
$queue->enqueue(101);
$queue->dequeue();
echo "<pre>";
var_dump($queue);