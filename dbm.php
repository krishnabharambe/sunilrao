<?php
$dsn = 'mysql:host=localhost;dbname=srgzl';
$username = 'root';
$password = '';
$options = [];
try {
    global $connection;
$connection = new PDO($dsn, $username, $password, $options);
// echo "Connection Done";
session_start();
} catch(PDOException $e) {
    echo "Connection Failed";
}


function getmainHeaderImage(){
    global $connection;
    $sql = 'SELECT * FROM mainheader order by id desc limit 1';
    $statement = $connection->prepare($sql);
    $statement->execute();
    $data = $statement->fetch(PDO::FETCH_OBJ);
return $data;
}

function getaboutevent(){
    global $connection;
    $sql = 'SELECT * FROM aboutevent order by  id  desc limit 1';
    $statement = $connection->prepare($sql);
    $statement->execute();
    $data = $statement->fetch(PDO::FETCH_OBJ);
return $data;
}