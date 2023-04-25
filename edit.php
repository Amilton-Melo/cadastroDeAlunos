<?php 
session_start();

$matricula = $_POST['matricula'];
$nome_filho = $_POST['nome_filho'];
$cpf_filho = $_POST['cpf_filho'];
$data_nasc = $_POST['data_nasc'];

$email_filho = $_POST['email_filho'];
$telefone_filho = $_POST['telefone_filho'];
$sexo_filho = $_POST['sexo_filho'];

$nome_resp = $_POST['nome_resp'];
$cpf_resp = $_POST['cpf_resp'];
$email_resp = $_POST['email_resp'];
$telefone_resp = $_POST['telefone_resp'];
$sexo_resp = $_POST['sexo_resp'];



$link = mysqli_connect("192.168.0.26","amilton","admin","escola");
$result = mysqli_query($link, "UPDATE aluno SET nome_alu='$nome_filho', cpf_alu='$cpf_filho',data_nasc='$data_nasc', email_alu='$email_filho', telefone_alu='$telefone_filho', sexo_alu='$sexo_filho', nome_resp='$nome_resp', cpf_resp='$cpf_resp', email_resp='$email_resp', telefone_resp='$telefone_resp', sexo_resp='$sexo_resp' WHERE matricula ='$matricula'") or die(mysqli_error($conn));

if(mysqli_affected_rows($link)){
    $_SESSION['msg']= "<p style='color: green'>Alterado com suscesso</p>";
    header("Location: listar.php");
}
else{
    $_SESSION['msg']= "<p>Erro na alteração</p>";
    header("Location: listar.php?matricula=$matricula");
}

?>