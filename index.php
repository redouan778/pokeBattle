<style media="screen">
  body{
    background-image: url('img/pokemon.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    }
</style>
<img src="img/1.png" alt="charmeloen"
  style=" width: 501px;
    position: absolute;
    bottom: -108px;">
<img src="img/Pik.gif" alt="pikachu" style="    width: 501px;
    position: absolute;
    right: 123px;">
<?php

require 'Pokemon.php';
require 'Charmeleon.php';
require 'Pikachu.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

$tackle = new Attack('tackle', '60');

$pokemon = new Pikachu();

$pokemon2 = new Charmeleon();
// echo "<pre>";
// print_r($pokemon);
?>
<div style="background : white; display: inline-block; padding: 10px;">
  <?php
echo $pokemon2->getName() . " HP " . $pokemon2->getHealth() . "/" . $pokemon2->getHitPoints();
echo '<br>';

echo $pokemon->getName() . " HP " . $pokemon->getHealth() . "/" . $pokemon->getHitPoints();
echo '<br>';
echo '<br>';
$pokemon->DoAttack($pokemon, $pokemon2, $pokemon2);
echo '<br>';
echo '<br>';

$pokemon2->DoAttack($pokemon2, $pokemon, $pokemon);
echo '<br>';
echo '<br>';

$pokemon->DoAttack($pokemon, $pokemon2, $pokemon2);
 ?>
</div>
