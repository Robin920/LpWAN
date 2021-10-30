<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $message1 = $_POST['pot'];
	
        

	$var ="lora data = $message1"."\r\n\n";
	echo $var;
 
	$fp = fopen('data.txt', 'a');//opens file in append mode  
	fwrite($fp, $var);  
 
	fclose($fp);  

}
else
{
	$name = $_GET['name'];

	if ($name == null) {
		$name = 'guest';
	}

	$message = $_GET['temperature'];
       

	if ($message == null) {
		$message = 'hello there';
	}
	echo "$name says: $message";
      
}
?>