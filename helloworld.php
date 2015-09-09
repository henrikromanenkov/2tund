<?php
	$first_name = "Henrik";
	$last_name = "Romanenkov";

	echo $first_name." ". $last_name;
?>
<br>
<?php

	$age = 9;

	//testib loogikat, juhul kui vanus on väiksem kui 18
	//siis kirjuta alaealine, muul juhul "täisealine".
	
	//if'i sisse loogikatehe
	if($age < 18) {
		//tõene
		
		echo "alaealine"
		
	}else {
		//väär
		
		echo "täisealine"
	
?>