<?php
// Dichiarare degli array con i caratteri per generare la password
// $pas_num_char = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
$pas_letter_char = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l"];
// var_dump($pas_num_char, $pas_letter_char);
// Dichiarare una variabile per la lunghezza della password e assegnarli il valore del form tramite GET
// $password_len = "";
// $password_len = $_GET["password_number"];
// var_dump($password_len);

// Creare una funzione generi una password di lunghezza pari al valore preso dal form
function password_gen (){
    $pas_num_char = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $pass_len = $_GET["password_number"];

    if ($_GET["password_number"] != 0 && $_GET["password_number"] != ""){
        echo "dato presente";
        // Ciclo
        $my_password = [];
        for ($i = 0; $i < $pass_len; $i++){
            $num_rand = rand(0, (count($pas_num_char)) - 1);
            $my_password[] = $pas_num_char[$num_rand];
            }
        var_dump($my_password);
    } else{
        echo "dato assente";
    }
}
password_gen();


// Ciclo
// $my_password = [];
// for ($i = 0; $i <= strlen($_GET["password_number"]); $i++){
//     $num_rand = rand(0, strlen($_GET["password_number"]));
//     $my_password[] = $pas_num_char[$num_rand];
// }
// var_dump($my_password);
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