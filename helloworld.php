<?php
	$first_name = "Henrik";
	$last_name = "Romanenkov";

	echo $first_name." ". $last_name;
?>
<br>
<?php

	$age = 9;

	//testib loogikat, juhul kui vanus on väiksem kui 18
	//siis kirjuta "alaealine", muul juhul "täisealine".
	
	//if'i sisse loogikatehe
	if($age < 18) {
		//tõene
		
		echo "alaealine"
		
	}else {
		//väär
		echo "täisealine"
	}
	
?>
<br>
<?php

	//vastavalt vanuselel trükime nii mitu korda välja sõnan "palju"
	
	for($i = 0; $i < $age, $i = $i + 1) {
		
		//teguvus mis kordub
		echo "palju";
	}
	
	Echo "Õnne!";


?>