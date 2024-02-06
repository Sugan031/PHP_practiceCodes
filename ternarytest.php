<?php
function ternarySample($num){
    $ans = $num>30? "30>":($num>20?"20>":($num>10?"10>":"10 lesser"));
    echo $ans;
}

ternarySample(21);
ternarySample(31);
ternarySample(17);
ternarySample(1);
?>