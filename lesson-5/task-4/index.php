<?php

require_once 'Unit.php';

$unit1 = new Unit('Галл', 100, 10);
$unit2 = new Unit('Фракиец', 150, 8);

print_r($unit1);
print_r($unit2);

$unit1->attack($unit2);
$unit2->attack($unit1);

print_r($unit1);
print_r($unit2);

