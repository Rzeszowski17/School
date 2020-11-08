<?php
if (isset($_POST['a'])){
    $a=$_POST['a'];
    }

    function Pc_szescian($a){
        return number_format(round(6*pow($a,2),2),2,'.','');
    }
    function V_szesc($a){
        return number_format(round(pow($a,3),2),2,'.','');
    }
    function d_szesc($a){
        return number_format(round($a*sqrt(3),2),2,'.','');
    }
    function r_szesc($a){
        return number_format(round(($a/2),2),2,'.','');
    }
    function r_kulsze($a){
        return number_format(round(d_szesc(($a)/2),2),2,'.','');
    }
?>