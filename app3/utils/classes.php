<?php
declare(strict_types=1);

class SuperHero {
    // promoted properties only in PHP 8
    public function __construct(
        // readonly string $name, <- allway with types
        public  string $name,
        private array  $powers,
        public  string $planet
    ) {}

    public static function el_bro()
    {
        echo "<br />No seas idiota mi bro y ponto a estudiar<br />";
    }
    public static function name_nombre() : string
    {
        $names = ["Bro, pe", "Calla kgao, Qli kk", "ajja, kuki", "El pepe, Machado", "Come, estás flaco"];
        return $names[array_rand($names)];
    }

    public static function tu_mismo()
    {
        $names = ["Bro, pe", "Calla kgao, Qli kk", "ajja, kuki", "El pepe, Machado", "Come, estás flaco"];
        $name = $names[array_rand($names)];

        return new self($name, ["Kk", "PIPI", "asdsada"], "CObra?");
    }

    public function attack()
    {
        return "$this->name attack with his powers";
    }

    public function description()
    {
        $powers = implode(", ", $this->powers); // <- use for join array to string
        $names = explode(", ",$this->name); // <- use for split string to array
        return "$names[0] $names[1] is a superhero from
        $this->planet and have following powers
        $powers";
    }
}
/* 
SuperHero::el_bro();

$nombre = SuperHero::name_nombre();

$hero = new SuperHero($nombre, ["Rasho láser", "Comer kk", "Jajajajajajajja"], "Krypton");

echo $hero->description();
*/

$hero = SuperHero::tu_mismo();
echo $hero->description();
