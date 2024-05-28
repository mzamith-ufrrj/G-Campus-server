<?php
	include 'my-lib.php';
	if (authentication($_POST['user'], $_POST['passwd'])){
		echo 'OK';
	}else{
		echo 'FAILURE';
	}

?>
