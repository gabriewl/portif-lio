<?php
 
$nome = addcslashes($_POST['nome'], '');
$email = addcslashes($_POST['email'], '');
$celular = addcslashes($_POST['celular'], '');
$mensagem = addcslashes($_POST['mensagem'], '');

$para = "gabriel.ferreiraf7@gmail.com";
$assunto = "Coleta de Dados";

$corpo = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Celular: " . $celular . "\n" . "Mensagem: " . $mensagem;

$cabeca = "From: chaytac9703@gmail.com" . "\n" . "Reply-to: " . $email . "\n" . "X=Mailer:PHP/" . phpversion();

if (mail($para, $assunto, $corpo, $cabeca)) {
     echo("E-mail enviado com sucesso!");
} else {
     echo("Houve um erro ao enviar o e-mail.");
}
