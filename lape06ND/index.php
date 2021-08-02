<?php

echo '<h3>1.Užduotis</h3>';
//Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai 
//iš 5 elementų su reikšmėmis nuo 5 iki 25.

$komoda=[];

foreach(range(0, 9) as $stalcius) {

    foreach(range(0, 4) as $skyrelis){
        $komoda[$stalcius][$skyrelis] = rand(5,25);
        
    }
}

echo '<pre>';
print_r($komoda);

// Jeigu norima pasiekti tam tikra Pvz:. skyreliu echo "$komoda[2][3]";

echo '<h3>2.Užduotis</h3>';
echo  '<h3>a)</h3>';

//Suskaičiuokite kiek masyve yra elementų didesnių už 10;
$skaicius = 0;

foreach($komoda as $stalcius){

    foreach($stalcius as $skyrelis){
    if($skyrelis > 10){
        $skaicius++;
    }

    /*echo '<br>';
    print_r($skyrelis);
    echo '<br>';*/
    }
}

echo '<br>';
print_r("Skaiciu > 10 yra $skyrelis");
echo '<br>';

echo  '<h3>b)</h3>';
//Raskite didžiausio elemento reikšmę;

foreach($komoda as $stalcius){

    foreach($stalcius as $skyrelis){
    if($skyrelis >= 25){
        $skaicius++;
        print_r($skyrelis);
    }
  }
}

echo  '<h3>c)</h3>';
//Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas 
//(t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

 $sumos = [];
 foreach(range(0,4) as $skyrelis) {
     $sum = 0;
    foreach (range(0,9) as $stalcius){
         $sum += $komoda[$stalcius][$skyrelis];
     }
     $sumos[] = $sum;
 }

 print_r($sumos);

 echo  '<h3>d)</h3>';
 // Visus masyvus “pailginkite” iki 7 elementų.

 foreach(range(0, count($komoda)-1) as $stalcius){
     foreach(range(0,1) as $skyrelis){
         $komoda[$stalcius][$skyrelis] = rand(5, 25);
     }
 }

 echo '<br>';
 echo '<pre>';
 print_r($komoda);

 echo  '<h3>e)</h3>';
//Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas
//panaudokite kaip reikšmes sukuriant naują masyvą. 
//T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve,
// visų elementų sumai 

$sumos = [];

foreach(range(1, count($komoda)-1) as $stalcius){
    $sum = 0;
    foreach($komoda[$stalcius] as $value) {
        $sum += $value;
    }
    $sumos[] = $sum;
}
print_r($sumos);

echo '<h3>3.Užduotis</h3>';

//Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 
//elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. 
//Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

$masyvas = [];
$raides = range('A','Z');

foreach(range(0, 10) as $key){
     $netyciukas = [];
     foreach(range(1, rand(2,20)) as $value){
        
        
        $netyciukas = $raides;

     }
    sort($netyciukas);
    $masyvas[] = $netyciukas;
}

print_r($masyvas);

echo '<h3>5.Užduotis</h3>';

/*Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra 
masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis 
unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.*/


$array = [];
$user = [];
$place = [];

while (count($user) < 30){
    $random = rand(1, 1000000);
    if (!in_array($random, $user)) {
        $user[] = $random; 
    }
}

while(count($place) < 30){
    $random = rand(1, 100);
    if (!in_array($random, $place)){
        $place[] = $random;
    } 
}

foreach(range(0, count($user)-1) as $i ) {
    $array[] = ['user_Id' => $user[$i], 'place_in_row' => $place[$i]];

}

print_r($array);


echo '<h3>6.Užduotis</h3>';

//Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
//Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

