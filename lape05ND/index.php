<?php
echo '<h3>1.Užduotis</h3>';

$array = [];

foreach (range(0, 29) as $i ) {
    $array[] = rand(5,25);
}
print_r($array);
echo '<h3>2.Užduotis</h3>';

/* Naudodamiesi 1 uždavinio masyvu:
Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
*/

echo 'a)';
 $daugiau = 0;
 foreach ($array as $value) {
    if ( $value > 10 ) {
        $daugiau++;
     }
 }
 echo "Reiksmiu didesniu uz 10 yra: $daugiau". '<br>';

 echo '<br>';
 echo 'b)';

 //Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;

 $suma = 0;

 foreach ($array as $key=>$value) {
     if ($key % 2 == 0) {
         $suma += $value;
     }
 }

 echo " Lyginiu indeksu suma: $suma";

 echo '<br>';
 echo 'c)';

 //Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

 $newArray = [];

 foreach ($array as $key=>$value) {
    $newArray[] = $value - $key;
 }

  echo '<pre>';
  print_r($newArray);


 echo '<br>';
 echo 'd)';

 //Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų 
 //iki indekso 39;

foreach (range(0,9) as $i) {
    $newArray[] = rand(5,25);
} 

 for ($i = 0; $i < 10; ++$i){
    $newArray[] = rand(5,25);
 }

 $k = 0; 
 while ($k < 10) {
     $newArray[] = rand(5,25);
     ++$k;
 }

 print_r($newArray);



 echo '<br>';
 echo 'e)';
//Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, 
//kad bendras masyvas padidėtų iki indekso 39;

 for ($i = 0; $i < 10; ++$i){
     $newArray[] = rand(5,25);
 }

 echo '<pre>';
 print_r($newArray);

  echo '<br>';
  echo 'f)';
  
 //Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas 
 //iš neporinių indekso reikšmių, o kitas iš porinių;
 $even = [];
 $odd = [];

 foreach ($newArray as $key => $value) {
    if ($key % 2 == 0) {
        $even[] = $value;
    } else {
        $odd[] = $value;
    }
}
 echo '<pre>';
 var_dump($even);
 echo '<pre>';
 var_dump($odd);

 echo '<br>';
 echo 'g)';

 //Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

foreach ($newArray as $key => $value) {
    if ($key % 2 == 0){
        if ($value > 15) {
            $newArray[$key] = 0;
        }
    }
}
 echo '<pre>';
 print_r($newArray);

 echo '<pre>';
 var_dump($even);
 echo '<pre>';
 var_dump($odd);



 echo '<br>';
 echo 'h)';

  $i = 0;
 while ($newArray[$i] <= 10) {
     ++$i;
 }
 $i = 0;
 foreach ($newArray as $key => $value) {
     if ($value > 10) {
        $i = $key;
         break;
    }
 }
 
 echo "Maziausias indeksas yra: $i";


 echo '<br>';
 echo 'i)';

 //Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

 foreach ($newArray as $key => $value) {
    if ($key % 2 == 0) {
        unset($newArray[$key]);
    }
 }
 
 echo '<pre>';
 print_r($newArray);

 echo '<h3>3.Užduotis</h3>';

 //Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės 
 //A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

 $randomLetter = ['A', 'B', 'C', 'D'];
 $array = [];
 $countArray = ['A' => 0, 'B' =>0, 'C' =>0,'D' => 0];
 foreach (range(0,199) as $i) {
    $letter = $randomLetter[rand(0,3)];
    $array[] = $letter;
    ++$countArray[$letter];
}
 echo '<pre>';
 echo "Raidziu A yra $countArray[A], raidziu B yra $countArray[B], raidziu C yra $countArray[C], raidziu D yra $countArray[D]";


 echo '<h3>4.Užduotis</h3>';
 // Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.

 $newArray = [];

 foreach (range(1, $countArray['A']) as $whatevar) {
     $newArray[] = 'A';
 }

 foreach (range(1, $countArray['B']) as $whatevar) {
     $newArray[] = 'B';
 }

 foreach (range(1, $countArray['C']) as $whatevar) {
     $newArray[] = 'C';
 }

 foreach (range(1, $countArray['D']) as $whatevar) {
     $newArray[] = 'D';
 }

 echo '<pre>';
 print_r($newArray);


 echo '<h3>5.Užduotis</h3>';

//Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
//Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
function arrayGenerator() {
    $randomLetter = ['A', 'B', 'C', 'D'];
    $array = [];
    $countArray = ['A' => 0, 'B' =>0, 'C' =>0,'D' => 0];
    foreach (range(0,199) as $i) {
        $letter = $randomLetter[rand(0,3)];
        $array[] = $letter;
        ++$countArray[$letter];
    }
   
    return $array;
}

 $arr1 = arrayGenerator();
 $arr2 = arrayGenerator();
 $arr3 = arrayGenerator();
 $arrSum = [];
 foreach ($arr1 as $key => $value) {
    $arrSum[] = $arr1[$key] . $arr2[$key] . $arr3[$key];
 }
 echo '<pre>';

 $swap = array_flip($arrSum);
 $swap = array_flip($swap);

 echo 'Unikaliu reiksmiu yra: ' . count($swap);


 echo '<h3>6.Užduotis</h3>';

 //Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. 
 //Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).

 $masyvas = [];
 $masyvas2 = [];

 