<?php

require 'models/Fighter.php';
require 'models/Monster.php';
require 'models/Warrior.php';

require 'models2/Fighter.php';

use App\Models\Fighter;
use App\Models\Monster;
use App\Models\Warrior;

use App\Models2\Fighter as Combatant;

//new App\Models2\Fighter();
function getDataFromPlayer(Fighter $fighter) {
    echo $fighter->getImage() . PHP_EOL;
}

$player = new Combatant();

echo Fighter::getCount() .PHP_EOL;
$p1 = new Monster('Troll', 10, 'troll.jpg');
$p2 = new Warrior('Aragon', 100, 'king.jpg');
echo Fighter::getCount() .PHP_EOL;
