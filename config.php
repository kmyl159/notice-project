<?php 

global $pdo;

$dns = "mysql:dbname = mysqldb; host = localhost; charset = utf8";
$user ="root";
$password = "";

try{
    $pdo = new PDO($dns,$user,$password);
}catch(PDOException $e){
    echo "Erro ao conectar com o database: " . $e->getMessage();
    exit;
}
    
?>
