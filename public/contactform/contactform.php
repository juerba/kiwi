<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: TangledDemo'; 
$to = 'ju.erba@gmail.com'; 
$subject = $_POST['subject'];

/*$name = 'teste_nome';
$email = 'teste@email.com';
$message = 'o-lolo';
$from = 'From: Ololo'; 
$to = 'ju.erba@gmail.com'; 
$subject = 'teste subject';*/


$body = "From: $name\n E-Mail: $email\n Assunto: $subject \n Message:\n $message";

$mail = mail ($to, $subject, $body, $from);
if ($mail) { 
    $msg="OK";
} else { 
    $msg=":(";
}

echo $msg;
?>