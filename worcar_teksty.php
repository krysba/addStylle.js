<?php 
/* 
Plugin Name: Worcar Teksty
Plugin URI:
Description: Testowy plugin do strony www wyświetlający teksty powstały na podstawie kursu wordpress-pluginy
Version: 0.5
Author: Krzysztof Bańkowski - worcar
Author URI:
License:GPLV2
*/


function worcar_teksty_get_random_quote(){
    $quotes = array(
        "perwszy cytat wordpress jest naprawdę fajny",
        "drugi cytat nauka wordpressa to ciągłe wyzwanie ",
        "trzeci cytat fantastyczne efekty nauki woocomerce"
    );
    return $quotes[mt_rand(0,(count($quotes)-1))];
}
// echo worcar_teksty_get_random_quote();
function worcar_teksty_random_quote(){
    $quotes = "'".worcar_teksty_get_random_quote()."'";
    echo '<section class="quotes">'.'<h4>'.$quotes.'</h4>'.'</section>' ;
}



?>