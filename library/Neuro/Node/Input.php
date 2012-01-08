<?php
namespace Neuro\Node;

class Input extends Node
{
    protected $reaction = null;

    public function set($reaction)
    {
        $this->reaction = $reaction;
    }

    public function reaction()
    {
        return $this->reaction;
    }
}

