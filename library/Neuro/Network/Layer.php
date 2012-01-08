<?php
namespace Neuro\Network;
use Neuro\Node;
use IteratorAggregate;
use ArrayObject;

class Layer implements IteratorAggregate
{
    protected $collection = array();

    public function addNode(Node\Node $node)
    {
        $this->collection[] = $node;
    }

    public function getIterator()
    {
        return new ArrayObject($this->collection);
    }
}

