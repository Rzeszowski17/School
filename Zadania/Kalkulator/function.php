<?php

    $x=$_GET['x'];
    $y=$_GET['y']; 

    $option=$_GET['sign'];

   switch ($option){
        case'sum':
            function sum($x, $y){
                $result = $x + $y;
                return $result;
              }
        break;
   
        case'ode':
            function ode($x, $y){
                $result = $x - $y;
                return $result;
              }
        break;
   
        case'mno':
            function mno($x, $y){
                $result = $x * $y;
                return $result;
              }
        break;

        case'dzi':
            function dzi($x, $y){
                $result = $x / $y;
                return $result;
              }
        break;
    }  


?>