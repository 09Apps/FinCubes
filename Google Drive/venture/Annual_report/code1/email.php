<?php
// print_r($_POST);



if( isset($_POST['email']) ){

$file=fopen("list.csv","a+") or exit("Unable to open file!");


fwrite($file,  $_POST['email'] . ','. $_POST['company'] ."\n");

fclose($file);




}else{
	echo 'error';
	exit('please fill in all fields');
}
?>
