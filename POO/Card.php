<?php

class Card
{

    private $figure;
    private $symbol;

    public function __construct($figure, $symbol)
    {
        $this->figure = $figure;
        $this->symbol = $symbol;
    }

    public function CardDescription()
    {
        echo ("this is a " . $this->figure . " of " . $this->symbol);
    }
}

$card01 = new Card("king", "heart");

echo $card01->CardDescription();
