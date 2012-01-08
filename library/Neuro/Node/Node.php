<?php
namespace Neuro\Node;

class Node
{
    protected $nodes = array();

    public function addNode($weight, Node $node)
    {
        $this->nodes[] = array($weight, $node);
    }

    public function reaction()
    {
        $reaction = 0;
        foreach ($this->nodes as $item) {
            list($weight, $node) = $item;
            $reaction += $weight * $node->reaction();
        }
        return ($reaction>0) ? 1 : -1;
    }
}

