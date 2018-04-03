<?php
var_dump( $_POST );
die;
// Receive form Post data and Saving it in variables
$email = $_POST['newsletter-email'];
//$email = 'myhappymail@unhappy.com';

// Write the name of text file where data will be store
$filename = "formdata.txt";

// Marge all the variables with text in a single variable. 
$f_data= '
Email2! :  '.$email.'
=========================
';
file_put_contents( $filename, $f_data, FILE_APPEND | LOCK_EX );

// $file = fopen($filename, "a");
// fwrite($file,$f_data);
// fclose($file);
echo 'Form data has been saved to '.$filename.'  <br>
<a href="'.$filename.'">Click here to read </a> ';
$file = fopen($filename, "a");
fwrite($file,$f_data);
fclose($file);
?>