<?php

    $x=isset($_POST['x']);
    $y=isset($_POST['y']); 



    function add($x, $y):string{
        $result = $x + $y;
        return $result;
      }

      function sub($x, $y):string{
        $result = $x - $y;
        return $result;
      } 

      function mul($x, $y):string{
        $result = $x * $y;
        return $result;
      }

      function div($x, $y):string{
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

    if(isset($_POST['option'])){
         switch ($option){
                case'add':
                    echo sum($x, $y);
                 break;
   
                case'sub':
                    echo sub($x, $y);
                break;
   
                case'mul':
                    echo mul($x, $y);
                break;

                case'div':
                    echo div($x, $y);
                break;

                default:
                break;
        
   }  
}

?>