<?php
require_once ('game.class.php');
class Deck implements RandomValueProvider {
    private $colors;
    private $values;
    private $value;
    private $generator;

    public function __construct($colors, $values, RandomGenerator $generator) {
        $this->colors = $colors;
        $this->values = $values;
        $this->generator = $generator;
    }

    public function generateRandomValue() {
        $color = $this->generator->generateRandomValue (0, count($this->colors) - 1);
        $cardValue = $this->generator->generateRandomValue (0, count($this->values) - 1);
        $this->value = $color * count($this->values) + $cardValue + 1;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        echo "La valeur d'une carte ne peut pas être définie manuellement.";
    }
}
?>