<?php

/*Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100. 
Tiems masyvo nariams, kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), priskirkite reikšmę “A”. 
Likusiems nariams priskirkite reikšmę “B”. Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();*/

$array = [];
$beLiekanos = 0;
foreach(range(0, 100) as $key =>$value){
    if( $key % 2 == 0) {
        $beLiekanos += $value;
        $array[] = "A ";
        
        if($key % 3 != 0){
            $array[] = "B";
        }
    }
      
}
echo '<pre>';
print_r($array);