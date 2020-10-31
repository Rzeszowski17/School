<?php

    $x=isset($_POST['x']);
    $y=isset($_POST['y']); 


if(isset($_POST['option'])){
   switch ($option){
        case'add':
            function add($x, $y):string{
                $result = $x + $y;
                return $result;
              }
              echo sum($x, $y);
        break;
   
        case'sub':
            function sub($x, $y):string{
                $result = $x - $y;
                return $result;
              } 
        break;
   
        case'mul':
            function mul($x, $y):string{
                $result = $x * $y;
                return $result;
              }
        break;

        case'div':
            function div($x, $y){
              if(y==0)
              {
                echo "Do not divide by 0";
              }
              else
              {
                $result = $x / $y;
                return $result;

              }
            }
        break;

        default:

        
    }  
}

?>