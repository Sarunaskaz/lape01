<?php

echo '<h3>6.Užduotis</h3>';

//Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
//Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.



$komoda=[];

foreach(range(0, 9) as $stalcius) {

    foreach(range(0, 4) as $skyrelis){
        $komoda[$stalcius][$skyrelis] = rand(5,25);
        
    }
}


