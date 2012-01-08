<?php
namespace Neuro\Network;

class Network
{
    protected $layers = array();

    public function addLayer(Layer $layer)
    {
        $_layer = end($this->layers);
        if (count($this->layers)) {
            $this->connectLayers(end($this->layers), $layer);
        }
        $this->layers[] = $layer;
    }

    public function connectLayers(Layer $input, Layer $output)
    {
        foreach ($input as $node) {
            foreach ($output as $_node) {
                $_node->addNode($this->getRandomWeight(), $node);
            }
        }
    }

    public function getRandomWeight()
    {
		return (mt_rand(0, 1000)-500)/500;
	}
}

