<?php

function leadingZero($index){
    $indexPlus = ++$index;
    $indexString = $indexPlus;
    
    if($indexPlus < 10) {
        $indexString = '0' . $indexPlus;
    }

    return $indexString;
}      
?>