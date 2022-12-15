<?php 
include "function.php";
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
    <header>
        <div>
            <h1>Password Generator</h1>
        </div>
        <div>
            <form action="" method="get">
                <input type="number" name="password_number">
                <button>Genera</button>
            </form>
        </div> 
    </header>
    <main>
        <h2>
            <?php echo implode ($new_password )?>
        </h2>
    </main>
</body>
</html>


<!-- $num_rand = rand(0, (count($pas_num_char)) - 1);
$my_password[] = $pas_num_char[$num_rand]; -->