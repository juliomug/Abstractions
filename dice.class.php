
<?php 
require_once 'game.class.php'; 
class Dice implements RandomValueProvider {
    private $sides = 6;
    private $value;
    private $generator;

    public function __construct(RandomGenerator $generator) {
        $this->generator = $generator;
    }

    public function generateRandomValue() {
        $this->value = $this->generator->generateRandomValue (1, $this->sides);
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        if ($value >= 1 && $value <= $this->sides) {
            $this->value = $value;
        } else {
            echo "La valeur doit être comprise entre 1 et " . $this->sides . " pour un dé standard.";
        }
    }
}
?>