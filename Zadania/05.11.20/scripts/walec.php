<?php
if (isset($_POST['r'],$_POST['h'])){
    $r=$_POST['r'];
    $h=$_POST['h'];
    }

    function Pop_wale($r){
        $pI=3.14;
        return number_format(round($pI*pow($r,2),2),2,'.','');
    }
    function Po_PB_wale($r,$h){
        $pI=3.14;
        return number_format(round((2*$pI*$r*$h),2),2,'.','');
    }
    function Po_PC_wale($r,$h){
        return number_format(round((2*Pop_wale($r) + Po_PB_wale($r,$h)),2),2,'.','');
    }
    function Ob_wale($h,$r){
        return number_format(round((Po_PB_wale($r,$h)*$h),2),2,'.','');
    }
?>