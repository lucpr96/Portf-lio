<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']); 
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);
    
    $para = "lpr1596@gmail.com";
    $assunto = "Informações de Contato";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: lpr1596@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enivar o e-mail!");
    }


?>