<?php

echo "<h1> Labas pasauli </h1>";




// Išvesti rezultatą ir sprendimą ar egzaminas išlaikytas. Mažiausias išlaikymo balas yra 4

$egzaminoRezultatas = rand(1, 10);


if ($egzaminoRezultatas >= 4 )
{ echo 'islaikytas <br>'  .$egzaminoRezultatas;
}
else { echo 'neišlaikyta <br>'  .$egzaminoRezultatas;
}
echo '<br>';echo '<br>';echo '<br>';
// Išvesti rezultatą ir sprendimą ar egzaminas išlaikytas. Mažiausias išlaikymo balas yra 4



$automobilioGreitis = rand(40, 125);
// Išvesti automobilio greitį ir baudos dydį, jeigu greiti didesnis nei 60. Bauda yra viršytas greitis X 5
if ($automobilioGreitis > 60) {
    $virsytasGreitis = 125 - $automobilioGreitis;
    $bauda = $virsytasGreitis * 5;
    {echo 'automobilioGreitis <br>' .$automobilioGreitis ;
    }
    {echo 'virsytasGreitis <br>' .$virsytasGreitis;
    }
    
    {echo 'bauda <br>' .$bauda;}
    echo '<br>';
}
echo '<br>';echo '<br>';echo '<br>';

/*$dalyvis1 = rand(1, 4);
$dalyvis2 = rand(1, 4);
// Išvesti dalyvių pasirinktus skaičius ir pranešimą "Laimėjo", 
//jeigu dalyvių skaičių suma didesnė nei 6 arba tie skaičiai yra vienodi. Pranešimą "Pralaimėjo" - priešingu atveju 
if (($dalyvis1 +$dalyvis2) > 6) echo 'Pranesima laimejo <br>';
elseif ($dalyvis1 +$dalyvis2 === 6) echo 'Pranesima laimejo <br>';
else echo '<br> Pranesima pralaimejo <br>';*/

$petras = rand(10 , 20);
$jonas = rand (5, 25);
/*
Jonas ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20,
 Jonas surenka taškų kiekį nuo 5 iki 25. Išvesti žaidėjų vardus su taškų kiekiu ir
 “Laimėjo: laimėtojo vardas”;
Taškų kiekį generuokite funkcija rand()
*/

if ($petras > $jonas) {
    echo "Laimejo: <i>Petras</i> $petras : $jonas ";
}
elseif ($petras < $jonas) {
    echo "Laimejo: <i>Jonas</i> $petras : $jonas ";
}
else {
    echo "Laimejo: <i>Niekas</i> $petras : $jonas ";
    echo '<br>';
}

$vienas = 5;
$rezYes = 0;
$rezNo = 0;
$rezultatas = (1 == $vienas) ? 'Yes' : 'No'; // $rezultatas  yra 'Yes' 
// Ternaris. Salyga nuo rezultato atskiriama '?' , o du skirtingi rezultatai atskiriama ' : ' . 
// Privalo buti dvi salygos pvz:. YES : NO ; arba TRUE : FALSE;

// Pirmas ternario budas
(1 == $vienas) ? $rezYes++ : $rezNo++; 

echo '<br>';echo '<br>';echo '<br>';
echo $rezultatas;
echo '<br>';
echo "$rezYes : $rezNo"; 

// Antras su If'ais budas.
    $rezultatas = (1 == $vienas) ? 'Yes' : ((2 == $vienas) ? 'Batai' : 'No' );

    if (1 == $vienas) {
        $rezultatas = 'Yes';
    }
    elseif (2 == $vienas) {
        $rezultatas = 'Batai';
    }
    else {
        $rezultatas = 'No';
    }
    echo '<br>';echo '<br>';echo '<br>';
    echo $rezultatas;

    // Trecias budas su Swich
    switch ($vienas) {
    case 1:
        $rezultatas = 'Yes';
        break;
    case 2:
        $rezultatas = 'Batai';
        break;
    default:
        $rezultatas = 'No';
}
    echo '<br>';echo '<br>';echo '<br>';
    echo $rezultatas;
