<?php

//Uždavinys Kiek reikės šaukštų suvalgyti visą sriubą?
// Vienas šaukštas pasemia nuo 7 iki 10 ml sriubos


/*$sriuba = rand(260, 300);
$saukstuKiekis = 0;
do {
    $saukstuKiekis++;

    // $sriuba -= min(rand(7, 10), $sriuba);
    $pasemta = rand(7, 10);
    // $sriuba -= $pasemta > $sriuba ? $sriuba : $pasemta;
    if ($pasemta > $sriuba) {

        $sriuba = $sriuba - $sriuba;
    }
    else {

        $sriuba = $sriuba - $pasemta;
    }
} while ($sriuba > 0);

echo $saukstuKiekis, $sriuba;*/

    //Uždavinys Kiek reikės šakučių suvalgyti visą kepsnį?
    // Viena šaukutė pasmeigia nuo 7 iki 10 g kepsnio
    // Viena krimstelėjimas sukramto nuo 4 iki 6 g šakute į burną įsidėto kepsnio
$kepsnys = rand(300, 350); //g mėsos(sojos gaminio)
$sakuciuKiekis = 0;
$krimstelejimai = 0;


echo "Isviso kepsnio buvo $kepsnys <br>";
do {
    // kepsnio pasmeigimas sakute
    $sakutes = rand(7, 10); // generuoja kiek pasmeigs sakute
    $kepsnys -= $sakutes; // nuo kepsnio minusuoja kiek pasmeigta ant sakutes
    $sakuciuKiekis++; // didina sakuciu skaiciu
    if ($kepsnys < 0) { //tikrina ar ne i minusa
        $kepsnys = 0; // jeigu minusas - lygu nuliui
    }
    echo "leksteje liko $kepsnys g kepsnio <br>";
    do{
        //kepsnio valgymas nuo sakutes
        $krimst = rand(4, 6); // generuoja kiek mesos sukramtys vienu krimstelejimu 
        $krimstelejimai++; // padidina krimstelejimu skaiciu
        $sakutes -= $krimst; // nuo sakutes kiekio minusuoja krimstelejimo kieki
        if ($sakutes < 0) { // tikrina ar ne i minusa
            $sakutes = 0; // jeigu minusas - lygu nuliui
        }
    } while ($sakutes > 0); // sukasi kol ant sakutes dar yra mesos
} while ($kepsnys !=0); // sukasi kol leksteje yra mesos

echo "kepsniui suvalgyti prireike $sakuciuKiekis saukstu ir $krimstelejimai krimstelejimu";




echo '<h3>1.Užduotis</h3>';
/*Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;*/

$zvaigzdes = '';
for ($i = 0; $i <= 400; $i++){
    $zvaigzdes .= '*';
}

echo "<span style=\"word-break: break-all; white-space: normal\">$zvaigzdes</span>";
echo '<br>';
echo '<br>';

for ($i = 1; $i <= 400; $i++){
    echo '*';
    if($i % 50 == 0){
        echo '<br>';
    }
}

echo '<h3>2.Užduotis</h3>';
/*Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite
 kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.*/


$over150 = 0;
for ($i = 0; $i < 300; $i++) {
    $skaicius = rand(0, 300);
    if ($skaicius > 150) {
        $over150++;
    }
    if ($skaicius > 270) {
        echo "<span style='color: red;'>$skaicius </span>";
    } else {
        echo "<span>$skaicius </span>";
    }
}
echo '<br>';
echo "skaiciu didesniu uz 150 yra $over150";
echo '<br><br><br>';



echo '<h3>3.Užduotis</h3>';

/*Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus 
tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. 
Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. 
Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.*/

$randomSkaicius = rand(3000, 4000); // sugeneruoja random skaiciu 
/*
pradeda cikla nuo 77, kas yra pirmas skaicius, kuris dalinasi is 77 be liekanos
ciklas sukasi kol $i yra maziau uz ta random sugeneruota skaiciu
tradiciskai, mes $i kiekviena cikla didinam +1, taciau kaip enzo pastebejo, ciklas sukasi ""per daug kartu"",
zinom pirma skaiciu, kuris dalinasi is 77 be liekanos, kitas skaicius, kuris dalinsis be liekanos is 77, bus $i + 77.
taigi, vietoje to, kad $i kaskart didinti vienu, didinam 77iais.
$i++ yra $i = $i + 1
$i += 77 yra $i = $i + 77
*/
for ($i=77; $i <= $randomSkaicius; $i +=77) { 
    if ($i == 77) { //pirmas skaiciuis bus echointas be kablelio
        echo $i; // '77'
    } else {
        echo ", $i"; // visi kiti bus su kableliu, tarpu ir tada $i reiksme.  ', 231'
    }
}


echo '<h3>4 - 5.Užduotis</h3>';

/*Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių,
 kad kvadratas ekrane atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *   */

$size = 100;
echo '<div style="display: block">';
for ($i = 0; $i < $size; $i++) {
    echo '<div style="display: block;">';
    for ($j = 0; $j < $size; $j++) {
        if ($j == $i || $j == $size - 1 - $i) {
            echo '<span style="color: red;">*</span>';
        } else {
            echo '<span>*</span>';
        }
    }
    echo '</div>';
}
echo '</div>';


echo '<h3>6.Užduotis</h3>';
/*Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
Iškritus herbui;
Tris kartus iškritus herbui;
Tris kartus iš eilės iškritus herbui;*/


echo '5. <br>';
echo '<br>pirmas scenarijus<br>';
do {
    $metimas = (rand(0,1) == 0) ? 'H' : 'S';
    echo "$metimas <br>";
} while ($metimas != 'H');
echo '<br>antras scenarijus<br>';

$herbai = 0;
do {
    $metimas = (rand(0,1) == 0) ? 'H' : 'S';
    if ($metimas == 'H') {
        $herbai++;
    }
    echo "$metimas <br>";
} while ($herbai < 3);

echo '<br>trecias scenarijus<br>';


$herbai = 0;
do {
    $metimas = (rand(0,1) == 0) ? 'H' : 'S';
    if ($metimas == 'H') {
        $herbai++;
    } else {
        $herbai = 0;
    }
    echo "$metimas <br>";
} while ($herbai < 3);


echo '<h3>7.Užduotis</h3>';
/* Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, 
Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir 
“Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas,
kas greičiau surenka 222 taškus. Partijas kartoti tol,
kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break. */ 

$petroTaskai = 0;
$kazioTaskai = 0;
while ($petroTaskai <= 222 && $kazioTaskai <= 222) {
    $petroTaskai += rand(10, 20);
    $kazioTaskai += rand(5, 25);
}
echo "Petro taskai: $petroTaskai; Kazio taskai: $kazioTaskai; Partija laimejo: "
 . (($petroTaskai > $kazioTaskai) ? 'Petras' : (($kazioTaskai > $petroTaskai) ? 'Kazys' : 'Lygiosios'));


 echo '<h3>10.Užduotis</h3>';

    /*Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. 
    Vinies ilgis 8.5cm (pilnai sulenda į lentą).
“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, 
bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), 
kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
*/






