<?php
include_once"index2.php"
//include "Form.html"
?>





<?php

$n=5;



for ($i=1; $i<=$n; $i++) {

    for ($j=$n; $j<$i; $j--) {

        echo "_";
    }

    for ($j=1; $j<=$i; $j++) {
        echo "*";
    }

    for ($j=$n; $j>$i; $j--) {

        echo "_";
    }
    
    echo "\n";


}