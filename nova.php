<?php
session_start();
include 'db.php';
$email_repeat = (" SELECT * FROM franqueados WHERE email_candidato = '" . $_POST['email'] . "'");
$sql_comparar = mysqli_query($conn, $email_repeat);
if (mysqli_num_rows($sql_comparar) == 1) {
    // Sessions
    $_SESSION["msg_erro"]="Email já se cadastrou no nosso sistema de Franquia!!";
    $_SESSION["msg_erro_mobile"]="Email já se cadastrou no nosso sistema de Franquia!!";
    header('location:index.php');
    return die;
} else {
    $nome_candidato = $_POST['nome'];
    $telefone_candidato = $_POST['telefone'];
    $whatsapp_candidato = $_POST['whatsapp'];
    $email_candidato = $_POST['email'];
    $cidade_interesse = $_POST['cidade_interesse'];
    $correct_zap = preg_replace("/\D+/", "", $whatsapp_candidato);
    $correct_telefone = preg_replace("/\D+/", "", $telefone_candidato);
    $query = "INSERT INTO franqueados(nome_candidato, telefone_candidato, whatsapp_candidato, email_candidato, cidade_interesse) 
    VALUES('$nome_candidato', '$correct_telefone','$correct_zap', '$email_candidato','$cidade_interesse') ";
    mysqli_query($conn, $query);
    // Sessions
    $_SESSION["msg_sucesso"]="Obrigado por preencher o formulario!";
    $_SESSION["ms_sucesso_mobile"]="Obrigado por preencher o formulario!";
    header('location:index.php');
    mysqli_close($conn);
}
