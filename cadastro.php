<?php 
include("cadastrar.php");
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
$result = mysqli_query($link, "INSERT INTO aluno(nome_alu, cpf_alu,data_nasc, email_alu, telefone_alu, sexo_alu, nome_resp, cpf_resp, email_resp, telefone_resp, sexo_resp) VALUES('$nome_filho', '$cpf_filho','$data_nasc', '$email_filho', '$telefone_filho', '$sexo_filho', '$nome_resp', '$cpf_resp', '$email_resp', '$telefone_resp', '$sexo_resp')") or die(mysqli_error($conn));
?>