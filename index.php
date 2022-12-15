<?php
// Dichiarare una variabile per la lunghezza della password e assegnarli il valore del form tramite GET
$password_len = "";
$password_len = $_GET["password_number"];
var_dump($password_len);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <h1>Password</h1>
    <form action="" method="get">
        <input type="number" name="password_number">
        <button>Genera</button>
    </form>
</body>
</html>