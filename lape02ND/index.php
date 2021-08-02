<?php
echo '<h1>1.Užduotis</h1>';
$vardas = 'Šarūnas';
$pavarde = 'Kazakauskas';
$gimimoMetai = '1995-06-26';
$dabartiniaiMetai = '2021-07-24';

echo 'Vardas-' .$vardas, '<br>Pavarde-' .$pavarde, 
'<br>GimimoMetai-' .$gimimoMetai, '<br>DabartiniaiMetai-' .$dabartiniaiMetai;

echo '<h1>2.Užduotis</h1>';

//Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand()
// jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. 
//Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

$pirmas = rand(0, 4);
$antras = rand(0, 4);

    if ($pirmas >= $antras) {
        
         if (($pirmas && $antras) == 0 ){
         echo 'nulis';
         if ($pirmas == 0) {
             echo 'nulis';
             if ($antras == 0){
                 echo 'nulis';
             }
            }
        }
        else{
        $didesnis = $pirmas / $antras;
         echo "Pirmas buvo didesnis <r>" .round($didesnis);
    }
}    

    elseif ($pirmas <= $antras) {
            if (($pirmas && $antras) == 0 ){
            echo 'nulis';
            if ($pirmas == 0) {
                  echo 'nulis';
                  if ($antras == 0){
                  echo 'nulis';
             }
            }
        }
        else{
        $didesnis = $antras / $pirmas;
            echo "Antras buvo didesnis <r>" .round($didesnis);
    }
}        

echo '<h1>3.Užduotis</h1>';
    /*Naudokite funkcija rand(). 
    Sukurkite tris kintamuosius ir naudodamiesi funkcija rand()
    jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. 
    Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.*/

    $vienas = rand(0,25);
    $du     = rand(0,25);
    $trys   = rand(0,25);
    echo "Pirmas kintamasis yra $vienas, antras yra $du, trecias yra $trys";
    echo '<br>';echo '<br>';
    if (($vienas > $du && $du > $trys) || ($trys > $du && $du > $vienas)){
        echo 'Vidurine reiksme turi antras kintamasis';
    }
    elseif (($du > $vienas && $vienas > $trys) || ($trys > $vienas && $vienas > $du)){
        echo 'Vidurine reiksme turi pirmas kintamasis';
    }
    elseif (($vienas > $trys && $trys > $du) || ($du > $trys && $trys > $vienas)){
        echo 'Vidurine reiksme turi trecias kintamasis';
    }
    elseif ($vienas == $du){
        echo 'Pirmas ir antras kintamieji vienodi';
    }
    elseif ($vienas == $trys){
        echo 'Pirmas ir trecias kintamieji vienodi';
    }
    elseif ($du == $trys){
        echo 'Antras ir trecias kintamieji vienodi';
    }
    elseif ($vienas == $du && $du == $trys ){
        echo 'Visi kintamieji vienodi';
    }

    

    /*Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji 
    (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, 
    kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. */
    echo '<h1>4.Užduotis</h1>';
    $a = rand(1, 10);
    $b = rand(1, 10);
    $c = rand(1, 10);

    echo 'Trikampiai susidaro tada kai dvieju krastiniu sudetis didesne uz trecia.';
    echo '<br>';
    echo "Pirmas kintamasis $a, antras $b, trecias $c.";
    echo '<br>';
    echo " $a+$b > $c";

    if ($a+$b > $c){
        echo '<br>';
        echo 'Trikampis susidarys';
    }
    elseif ($a+$b <= $c){
         echo '<br>';
         echo 'Trikampis nesusidarys';
        }
    elseif ($a+$c > $b) {
        echo '<br>';
        echo 'Trikampis susidarys';
     }
     elseif ($a+$c <= $b){
        echo '<br>';
        echo 'Trikampis nesusidarys';
        }
     elseif ($b+$c > $a) {
        echo '<br>';
        echo 'Trikampis susidarys';
    }
    elseif($b+$c <= $a){
        echo '<br>';
        echo 'Trikampis nesusidarys';
        }
    else {
        echo 'Trikampis nesusidarys';
    }
    
    echo '<h1>5.Užduotis</h1>';
    /*Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
    reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 
    (sprendimui masyvo nenaudoti).*/

    $var1 = rand(0, 2);
    $var2 = rand(0, 2);
    $var3 = rand(0, 2);
    $var4 = rand(0, 2);
    
    $nulis = 0;
    $vienetas = 1;
    $dvejetas = 2;
    
    if ($var1 == 0){
        $nulis++;
    }
    elseif ($var1 == 1) {
        $vienetas++;
    }
    elseif ($var1 == 2) {
        $dvejetas++;
    }

    if ($var2 == 0){
        $nulis++;
    }
    elseif ($var2 == 1) {
        $vienetas++;
    }
    elseif ($var2 == 2) {
        $dvejetas++;
    }

    if ($var3 == 0){
        $nulis++;
    }
    elseif ($var3 == 1) {
        $vienetas++;
    }
    elseif ($var3 == 2) {
        $dvejetas++;
    }

    if ($var4 == 0){
        $nulis++;
    }
    elseif ($var4 == 1) {
        $vienetas++;
    }
    elseif ($var4 == 2) {
        $dvejetas++;
    }

    echo "Nuliu yra $nulis, <br> vienetu yra $vienetas, <br> dvejetu yra $dvejetas, <br>";

    
    echo '<h1>6.Užduotis</h1>';
   /* Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite
      atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>*/

      $skaicius = rand(1, 6);
      echo "Skaicius $skaicius, <h$skaicius>$skaicius</h$skaicius>";

      echo '<h1>7.Užduotis</h1>';

     /* Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
      Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.*/
      
      $spalva1 = rand(-10, 10);
      $spalva2 = rand(-10, 10);
      $spalva3 = rand(-10, 10);

      $color1 = '#4CFF00';
      $color2 = '#FF0A1E';
      $color3 = '#0008FF';

        if ($spalva1 < 0){
            echo "<span style=\"color: $color1;\">$spalva1.</span>";
        }
        elseif ($spalva1 == 0){
            echo "<span style=\"color: $color2;\">$spalva1</span>";
        }
        elseif ($spalva1 > 0){
            echo "<span style=\"color: $color3;\">$spalva1</span>";
        }

        echo '<br>';
          if ($spalva2 < 0){
            echo "<span style=\"color: $color1;\">$spalva2.</span>";
        }
        elseif ($spalva2 == 0){
            echo "<span style=\"color: $color2;\">$spalva2</span>";
        }
        elseif ($spalva2 > 0){
            echo "<span style=\"color: $color3;\">$spalva2</span>";
        }

        echo '<br>';
          if ($spalva3 < 0){
            echo "<span style=\"color: $color1;\">$spalva3.</span>";
        }
        elseif ($spalva3 == 0){
            echo "<span style=\"color: $color2;\">$spalva3</span>";
        }
        elseif ($spalva3 > 0){
            echo "<span style=\"color: $color3;\">$spalva3</span>";
        }
   
         echo '<h1>8.Užduotis</h1>';
        /*Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, 
        daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą,
         kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
         Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.*/

         /*$vienetoKaina  = 1;
         $kiekis = rand(5, 3000);

         if ($kiekis > 1000 && $kiekis <= 2000) {
             ​​$vienetoKaina = $vienetoKaina - ($vienetoKaina * 0,03);
            }​​
         elseif ($kiekis > 2000){
        $vienetoKaina = $vienetoKaina - ($vienetoKaina *  0.04);}​​ 
        else {​​$vienetoKaina = 1;}
        ​​echo "Perkama $kiekis žvakių, vienos žvakės kainą $vienetoKaina Eur";echo '<br>'; echo '<br>';*/

