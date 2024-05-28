<?php
	include 'my-lib.php';
	if (authentication($_POST['user'], $_POST['passwd'])){
      $min = 1;
      $max = 6;
      $index = mt_rand($min,$max);
      if ($index >= 6)
         $index = 5;
       
      $filename = 'professor.'.$index.'.txt';
      //echo $filename;
      echo $filename . PHP_EOL;
      $myfile = fopen($filename, "r") or die("Unable to open file!");
      echo fread($myfile,filesize($filename));
      fclose($myfile);
	}
   

?>

