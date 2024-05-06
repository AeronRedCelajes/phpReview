<?php 
#PHP Arrays

$color = array("green","white","red");

echo count($color);
echo "<br/>";

echo "My favorite color are"." ".$color[0]." ".$color[1]." ".$color[2];
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$noarray = count($color);

for($x = 0; $x < $noarray; $x++){
	echo $color[$x];
	echo "<br/>";
}

?>