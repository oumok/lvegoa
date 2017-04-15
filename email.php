<?php 

$to = "learnviaexperiments@gmail.com";
$from = $_POST['email']; 
$name = $_POST['name']; 
$message = $_POST['message'];

mail($to,$from,$name,$message);

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

Redirect('http://lvegoa.cf/', false);


?>