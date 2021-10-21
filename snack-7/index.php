<?php 
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
require __DIR__ . "/data.php";
require __DIR__ . "/function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista studenti</h1>
    <ul>
        <?php foreach ($studenti as $studente) {?>
            <h2>Studente</h2>
            <li>
                Nome studente:<?php echo"{$studente["nome"]} {$studente["cognome"]}";?>
            </li>
            <li>Media voti studente <?php echo calcolaMedia($studente["voti"])?></li>
        <?php }?>
    </ul>
    
</body>
</html>