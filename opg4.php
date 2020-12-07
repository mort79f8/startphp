<?php

$i = 0;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}

echo "<br>";

for ($i = 0; $i < 11; $i++) {
    echo $i . "<br>";
}

echo "<br>";

$v31 = array("Mark", "Christian", "Nikolaj", "Jimmy", "Erik", "Morten");

foreach ($v31 as $key) {
    echo $key . "<br>";
}

echo "<br>";

$a = 0;

while ($a <= 5) {
    echo "*";
    for ($i = 0; $i < $a; $i++) {
        echo "\t*";
    }
    echo "<br>";
    $a++;
}
