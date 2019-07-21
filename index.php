<?php
	echo '<b>Error class :</b>'.'</br>';

	try{
		$str='Hello';
		$str[]=5;
	}
	catch(Error $e){
		echo $e->getMessage().'</br>';
		echo $e->getCode().'</br>';
		echo $e->getLine().'</br>';
		echo $e->getFile().'</br>';
	}

?>