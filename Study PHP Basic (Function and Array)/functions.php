<?php 
#php functions
/*
	function message(){
		echo "My First user define function";
	}

	message();
*/

##PHP function arguments
/*
function studname($name){
    echo "$name <br/>";
}

studname("Juan Dela Cruz");
studname("Peter Simion");
studname("Jack Cruz");
studname("Jane Doe");
*/

##PHP Functions with Returning values

function addthis($num1, $num2, $num3){
    $sumis = $num1 + $num2 + $num3;
    return $sumis;
}

echo addthis(5,2,5);

?>