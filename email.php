<?php

if(isset($_POST['email']) && !empty($_POST['email']) {



$nome = addslashes($_POST['name'])
$email = addslashes($_POST['email'])
$mensagem = addslashes($_POST)['message']

$to = "email@contato.com";
$subject = "Contato - Formulário";
$body = "Nome: " .$nome. "\r\n".
        "Email:" .$email. "\r\n".
        "Mensagem:" .$mensagem;

$header = "From:leonardo@contato.com"."\r\n".
            "Reply-to:".$email. "\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)) {
    echo("Email enviado com sucesso.");
    }else{
    echo("Email não pode ser enviado.");
}

}

?>