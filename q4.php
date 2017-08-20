<?php
function primeCheck($value){
	$output = True;
	for($i=2; $i<$value; $i++){
		if($value % $i == 0){
			echo $value." is NOT Prime"
		}
		else{
			echo $value." is Prime";
		}
	}
}
	
primeCheck(3)
}
?>