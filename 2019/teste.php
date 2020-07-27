<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$name = addslashes($_POST['name']);
$surname = addslashes($_POST['surname']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);

$to = "scheilla@scheillaazevedo.com";
$subject = "Contato - Site";
$body = "Nome: ".$name. "\r\n".
        "Apelido: ".$surname. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$message;
$header = "From:_mainaccount@scheillaazevedo.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("O email não pode ser enviado");
}

}
?>