<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=databaz", "root" , "");    
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}