<?php
$nome = filter_input(INPUT_POST , 'Tom', FILTER_SANITIZE_STRING);
$Telefone = filter_input(INPUT_POST , 'Telefone', FILTER_VALIDATE_INT);
$msg = filter_input(INPUT_POST , 'msg', FILTER_SANITIZE_STRING);
$to = 'joaoarturpsilva@gmail.com';
$subject = "Novo contato pelo site";
$message = "Nome: $nome
            Telefone: $Telefone
            Mensagem: $msg";
$headers = 'From: joaoarturpsilva@gmail.com' . "\r\n" .
            'Reply-To: joaoarturpsilva@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
$enviarEmail = mail($to, $subject , $message , $headers);

if($enviarEmail){
    echo "email enviado com sucesso";
} else{
    echo "Erro ao enviar sua mensagem";
}