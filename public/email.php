<?php

if(isset($_POST['email']) && !empty($POST['email]))

$nome=addslashes($_POST['name'])
$email=addslashes($_POST['email'])
$comments=addslashes($_POST['comments'])

$to="contato.bigeduc@gmail.com.br"
$subject="Mensagem - BigEduc" 
$body="Nome:  ".$nome. "\n"
      "Email:   ".$email. "\n"
       "Mensagem:  ".$comments;

$header= "From: lucmol92@bigeduc.netlify.com"."\r\n"
.Reply-to:.$email."\r\n"

 if(mail($to,$subject,$body,$header)){
 echo("Email enviado com sucesso");
 }
 }else{
  echo("Email não pode serenviado");
 
 }
 
?>
