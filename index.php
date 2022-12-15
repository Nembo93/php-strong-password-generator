<?php
// Dichiarare degli array con i caratteri per generare la password
// $pas_num_char = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
// $pas_letter_char = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l"];
// var_dump($pas_num_char, $pas_letter_char);
// Dichiarare una variabile per la lunghezza della password e assegnarli il valore del form tramite GET

// Creare una funzione generi una password di lunghezza pari al valore preso dal form
    // 1. Dichiarare l'array da cui attingere i numeri per generare la password all'interno della funzione
    // 2. Dichiarare in una variabile il valore del form (lunghezza della password)
    // 3. Creare condizione che verificando la presenza di un valore accettato all'interno del form, dichiari un array in cui pushare la password generata ed entri nel ciclo
    // 4. Creare ciclo che si esegua per un numero di volte pari alla lunghezza della password da generare
        // 4.1 Creare, all'interno del ciclo, funzione che generi un numero randomico (indice dell'array da cui attingere i numeri della password)
        // 4.2 Richiamare tramite indice (numero randomico) elemento dell'array da cui attingere numeri e pusharlo all'interno dell'array della password da generare

function password_gen (){
    $pass_len = $_GET["password_number"];
    $pas_num_char = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $pas_letter_char = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l"];

    if ($_GET["password_number"] != 0 && $_GET["password_number"] != ""){
        echo "dato presente";
        $my_password = [];
        // Ciclo
        for ($i = 0; $i < $pass_len; $i++){
            $rand_char = rand(0, 9);
            var_dump($rand_char);
            if($rand_char % 2 == 0){
                $num_rand = rand(0, (count($pas_num_char)) - 1);
                $my_password[] = $pas_num_char[$num_rand];
            } else {
                $num_rand = rand(0, (count($pas_letter_char)) - 1);
                $my_password[] = $pas_letter_char[$num_rand];
            }
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


<!-- $num_rand = rand(0, (count($pas_num_char)) - 1);
$my_password[] = $pas_num_char[$num_rand]; -->