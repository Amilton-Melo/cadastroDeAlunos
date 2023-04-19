<?php 
include("index.php");
$nome = $_POST['nome'];
$link = mysqli_connect("192.168.0.26","amilton","admin","escola");
$result = mysqli_query($link, "DELETE FROM alunos WHERE nome ='$nome';") or die(mysqli_error($conn));
?>