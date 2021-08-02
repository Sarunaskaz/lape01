<?php


echo '<h3>1.Užduotis</h3>';

$vardas = 'Silvestras';
$pavarde = 'Stalone';

echo "$vardas $pavarde";


echo '<h3>2.Užduotis</h3>';

$name = 'Silvestras';
$lastName = 'Stalone';

$name = strtoupper($name);
$lastName = strtolower($lastName);


echo "$name $lastName";

echo '<h3>3.Užduotis</h3>';

/*Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių.
 Jį atspausdinti.*/

$name = 'Silvestras';
$lastName = 'Stalone';

$rezult = $name.$lastName;

echo "$rezult[0] .$rezult[10]";

echo '<h3>4.Užduotis</h3>';

/*Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo
 ir pavardės kintamųjų raidžių. Jį atspausdinti*/

 $name = 'Silvestras';
 $lastName = 'Stalone';

 $fullName = $name.$lastName;
 
echo substr("$name", 7, 10);
echo substr("$lastName", 4, 6); 


echo '<h3>5.Užduotis</h3>';

/*Sukurti kintamąjį su stringu:
 “An American in Paris”.
  Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.*/

  $turistas = 'An American in Paris';
  $naujasTuristas = str_ireplace('A', '*', $turistas);
  
  echo $naujasTuristas;

  echo '<h3>6.Užduotis</h3>';

  /*Sukurti kintamąjį su stringu: “An American in Paris”. 
  Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.*/

  $american = 'An American in Paris';
  $newAmerican = str_replace(array('A', 'a'), array('', ''), $american, $count);
  echo $count;

  echo '<h3>7.Užduotis</h3>';
  /*Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. 
  Rezultatą atspausdinti. Kodą pakartoti su stringais:
   “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.*/

  $turistas = 'An American in Paris';
  $naujasTuristas = str_ireplace(array('A','E','I'), '', $turistas);
  echo $naujasTuristas;


  echo '<br>';

  $tiffani = 'Breakfast at Tiffany';
  $newTiffani = str_ireplace(['A','E','I','Y'], '', $tiffani);       //array() senas budas rasyti array masyva
  echo $newTiffani;                                                  // nauhas Budas [] ir jame rasyti 
  
  echo '<br>';

  $odyssey = '2001: A Space Odyssey';
  $newOdyssey = str_ireplace(['A','E','I','Y', 'O'], '', $odyssey);
  echo $newOdyssey;
   echo '<br>';

   $life = "It's a Wonderful Life";
   $newLife = str_ireplace( ['A','E','I','Y','O','U'], '', $life);
   echo $newLife;

   echo '<h3>8.Užduotis</h3>';

   $test='Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
   $re = '/\d/';
   $number=preg_match($re, $test, $matches);
   echo $matches[0];

   // Manto G. pavyzdys



  


