<?php
    $cha = 'a';
    $next_cha = ++$cha; 
    //The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
    if (strlen($next_cha) > 1) 
    {
    $next_cha = $next_cha[0];
    }
    echo $next_cha."\n";
?>