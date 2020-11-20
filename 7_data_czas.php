
<?php
//date()
echo 'dzień-miesiąc-rok: ', date('d-m-y'),'<br>';//19-11-20
echo  date('d-M-Y'),'<br>';//19-Nov-2020
echo  date('d-F-Y'),'<br>';//19-November-2020
echo date('w'),'<br>';//4

echo  date('G:i:s'),'<br>';//7:00:15
echo  date('H:i:s'),'<br>';//07:00:15
echo  date('H:i:sa'),'<br>';//17:33:06pm

setlocale(LC_TIME, "PL");
echo strftime ( '%d %B %Y');//19 listopad 2020
?>
<script>
setTimeout(function(){
    //window.location.reload(1);}, 1000);
</script>
<?php
    //getdate()
    $date=getdate();
    //echo $date;
    echo'<pre>';
    print_r($date);
    echo'<pre>';

    echo 'Dzień roku', $date['yday'],'<br>';
    echo date('L'),'<br>';
    if(date('L')){
        echo 'Rok jest przestępny';
    }
?>


