<?php
if (isset($_POST['a'])){
    $a=$_POST['a'];
    }

    function Po_szesc($a){
        return number_format(round(6*pow($a,2),2),2,'.','');
    }
    function Ob_szesc($a){
        return number_format(round(pow($a,3),2),2,'.','');
    }
    function Przeka_szesc($a){
        return number_format(round($a*sqrt(3),2),2,'.','');
    }
    function Wpi_szesc($a){
        return number_format(round(($a/2),2),2,'.','');
    }
    function Opi_kulsze($a){
        return number_format(round(Przeka_szesc(($a)/2),2),2,'.','');
    }
?>