<?php
include 'database/db.php';

$nome_candidato = $_POST['nome'];
$telefone_candidato = $_POST['telefone'];
$whatsapp_candidato = $_POST['whatsapp'];
$email_candidato = $_POST['email'];
$cidade_interesse = $_POST['cidade_interesse'];
$query = "INSERT INTO franqueados(nome_candidato, telefone_candidato, whatsapp_candidato, email_candidato, cidade_interesse) 
VALUES('$nome_candidato', '$telefone_candidato', '$whatsapp_candidato', '$email_candidato','$cidade_interesse') ";
mysqli_query($con, $query);
header('location:index.php');

if(isset($_POST['email']) && !empty($_POST['email'])){
    $to = "gabriel0gsbn@gmail.com";
    $subject = "Sistema de Franquia - Equivale";
    $body = "Nome: " . $nome_candidato . "\r\n" . 
            "Telefone: " . $telefone_candidato . "\r\n" .
            "Whatsapp: " . $whatsapp_candidato . "\r\n" .
            "Email: " . $email_candidato . "\r\n" .
            "Cidade de Interesse" . $cidade_interesse;
    $header = "From:gabriel0gsbn@gmail.com" . "\r\n" . 
              "Reply-To:".$email_candidato . "\r\n".
              "X=Mailer:PHP/".phpversion();
    
    if(mail($to, $subject, $body, $header)){
        echo("Dados enviado com sucesso, Muito obrigado");
    } else {
        echo("Parece que alguma coisa deu errado, por favor tente novamente.");
    };
    }