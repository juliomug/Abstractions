<?php 
require 'game.class.php';
class Coin implements RandomValueProvider {
    private $tossCount = 0;
    private $value;
    private $generator;

    public function __construct(RandomGenerator $generator) {
        $this->generator = $generator;
    }

    public function generateRandomValue() {
        $this->tossCount++;
        $this->value = $this->generator->generateRandomValue (0, 1);
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        echo "La valeur d'une pièce ne peut pas être définie manuellement.";
    }
}
?>