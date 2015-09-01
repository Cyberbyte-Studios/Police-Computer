<?php
function yesNo($string){
    if ($string == 1) return 'Yes';
    elseif ($string == 0) return 'No';
    else return $string;
}
