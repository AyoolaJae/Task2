<?php
 for($a = 1; $a <= 5; $a++) {
     for($b = 1; $b <= $a; $b++) {
         echo "*";
         if($b < $a) {
            echo " ";
         	}
     }
     echo "<br />";
}
?>