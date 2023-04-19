<?php 

function getConnection(){
    $host = "192.168.0.26";
    $banco= "escola";
    $user = "amilton";
    $password= "admin";
try {
  $conn = new PDO("mysql:host=".$host.";dbname=".$banco, $user, $password); 

  return $conn;
  
    }catch(PDOException $e) {
    return "ERROR: " . $e->getMessage();
    }
}

?>