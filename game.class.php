<?php 
class RandomGenerator {
    public function generateRandomValue($min,$max) {
        return rand($min, $max);
    }
}

interface RandomValueProvider {
    public function generateRandomValue();
    public function getValue();
    public function setValue($value);
}


 class GameMaster {
    private $dices;
    private $decks;
    private $coins;

    public function __construct(array $dices, array $decks, array $coins) {
        $this->dices = $dices;
        $this->decks = $decks;
        $this->coins = $coins;
    }

    public function pleaseGiveMeACrit($percentage) {
        $randomValueProvider = $this->getRandomValueProvider();
        $randomValueProvider->generateRandomValue();
        $maxValue = $randomValueProvider->getValue();
        echo "hello world";
        return ($maxValue / $randomValueProvider->getMaxValue()) < ($percentage / 100);
    }

    private function getRandomValueProvider() {
        $options = array_merge($this->dices, $this->decks, $this->coins);
        $randomIndex = array_rand($options);
       
        return $options[$randomIndex];
       
    }
}
?>