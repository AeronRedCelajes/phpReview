<html>
	<head>
		<title>Basic of PHP</title>
	</head>
	
	<body>
		<h1>PHP Basic Part 2</h1>
		<?PHP
		
		#while -loops through a block of code as long as the specified condition is true
		#do.. while - loops through a block of code once, and then repeats the loop as long as the
		#		specified condition is true.
		#for -loops through a block of code a specified number of times
		#foreach - loops through a block of code for each element in an array.
		
		/*while loop
		$x = 1;
		
		while($x <= 5){
			
			echo "The number is:$x <br/>";
			$x++;
		}
		
		*/
		
		/*do while loop
		$x = 1;
		
		do{
			
			echo "The number is: $x <br/>";
			$x++;
			
		}while($x <= 5)
		*/
	
		/*for loop
		$x = 1;
		
		for($x = 0; $x <= 20; $x++){
			
			echo "The number is: $x <br/>";
			
		}
		*/
		
		/*for each loop

		$colors = array("red", "green", "blue", "white");
		
		foreach($colors as $value){
			
			echo "$value <br/>";
			
		}
		
		*/
		
		#PHP SW2
		
		$colors = array("red", "green", "blue", "white");
		
		foreach($colors as $value){
			
			echo "$value <br/>";
			
		}
		?>	
		
	</body>
</html>