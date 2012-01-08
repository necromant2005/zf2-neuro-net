<?php
function __autoload($name)
{
    $path = __DIR__ . '/../library/' . str_replace('\\', '/', $name) . '.php';
    if (!file_exists($path)) throw new DomainException('Class "' . $name . '" not found');
    include_once($path);
}

$network = new Neuro\Network\Network;

$input0 = new Neuro\Node\Input;
$input1 = new Neuro\Node\Input;
$input2 = new Neuro\Node\Input;

$output0 = new Neuro\Node\Node;
$output1 = new Neuro\Node\Node;

// input
$layer = new Neuro\Network\Layer;
$layer->addNode($input0);
$layer->addNode($input1);
$layer->addNode($input2);
$network->addLayer($layer);

$layer = new Neuro\Network\Layer;
$layer->addNode(new Neuro\Node\Node);
$layer->addNode(new Neuro\Node\Node);
$layer->addNode(new Neuro\Node\Node);
$network->addLayer($layer);

// output
$layer = new Neuro\Network\Layer;
$layer->addNode($output0);
$layer->addNode($output1);
$network->addLayer($layer);

// USAGE

$input0->set(1);
$input1->set(0);
$input2->set(1);

var_dump($output0->reaction());
var_dump($output1->reaction());

