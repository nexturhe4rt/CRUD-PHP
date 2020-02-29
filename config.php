<?php

$dsn = "mysql:dbname=users;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "A conexão falhou" . $e->getMessage();
}
