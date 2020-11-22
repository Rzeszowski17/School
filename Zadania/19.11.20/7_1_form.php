<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and time</title>
</head>
<body>
<?php
    setlocale(LC_TIME, "PL");
        $date=date('Y-m-d');
        $time=date('H:i');
        $week=strftime(' %A ');
        $all_date=strftime ( '%g %B %Y, %I:%M:%S | %A');

    function funct1(){
        if(date('L')){
            $days=366;
            echo $days. ' (Rok jest przestępny)';
        }
        else{
            $days=365;
            echo $days. ' (Rok jest nieprzestępny)';
        
        }
    }
        
        $day=getdate();

        $num_week=date('W');

    function funct2(){
        if(date('L')){
            $days_of_the_year=366;
          }else {
            $days_of_the_year=365;
          };
          $today=strftime('%j');
          $days_to = $days_of_the_year - $today ;
          echo $days_to;
          }
    ?>
    <h4>Date and time</h4>
    <form method="POST">
    <input type="date" name="date" value="<?php echo $date ?>"><br><br>
    <input type="time" name="date" value="<?php echo $time ?>"><br><br>
    <input type="text" name="date" value="<?php echo $week ?>"size="10"><br><br>
    <input type="text" name="date" value="<?php echo $all_date ?>" size="30"><br><br>
    </form>
    <ul>
    <li>Ilość dni w roku: <?php funct1() ?> </li>
    <li>Dzień roku: <?php echo $day['yday']+1; ?></li>
    <li>Numer tygodnia w roku: <?php echo $num_week  ?></li>
    <li>Ilość dni do końca roku: <?php funct2() ?></li>
    </ul>
</body>
</html>