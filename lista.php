<?php 


/* 
Plugin Name: Plugin wypisz liste 
Plugin URI:
Description: Testowy plugin wypisujący listę <li></li>
Version: 0.5
Author: Krzysztof Bańkowski - worcar
Author URI:
License:GPLV2
*/

function dodaj_liste(){
    $licznik=15;
    for($i=0; $i<=$licznik; $i++)   {
        if ($i<$licznik){
            echo '<li>'.$i.'</li>';
        } else {
            echo '<li>'.$i.'= koniec'.'</li>';
        }

    };
}
function wypisz_liste() {
    echo dodaj_liste();
}

?>