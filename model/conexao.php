<?php
    $host = "mysql:host=localhost;dbname=sistemapoo;charset=utf8mb4;port=3306";
    $dbUser = "root";
    $dbPass = "";
    
    try{
         $con = new PDO($host,$dbUser,$dbPass);
         $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    }catch(PDOException $e){
        echo "Estamos em manutenção, volte novamente mais tarde <br>";
        echo $e->getMessage();
    }