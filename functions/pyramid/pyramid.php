<?php
    function pyramid(){
       $y = readline("Input: ");
        $ctr = 1;
        for($i = $y ; $i > 0 ; $i--){
            for($h=$i;$h>0;$h--){ //sets the whitespaces 
                echo " ";
            }
            for($j = 0 ; $j < $ctr ; $j++ ){
                echo "* "; //sets the amount of asterisk
            }
            echo "\n";
            $ctr++;
        }
    }
?>