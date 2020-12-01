<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <h1 class="ml3">L'Ouvre-Boites</h1>
        <img id="des" src="dice.svg" alt="Dés">
    </header>
</body>
</html>

<?php
$choixDes = $_POST["choixDes"] ?? false;
$choixFaces = $_POST["choixFaces"] ?? false;

$i = 1;
echo ('<div id="resultat">');
while ($i <= $choixDes){
    if ($choixFaces == 4){
        echo ('<div id="block">');
        echo random_int(1, 4);
        echo ('</div>');
    }

    elseif ($choixFaces == 6){
        echo ('<div id="block">');
        echo(random_int(1, 6));
        echo ('</div>');
    }
    
    elseif ($choixFaces == 8){
        echo ('<div id="block">');
        echo(random_int(1, 8));
        echo ('</div>');
    }

    elseif ($choixFaces == 10){
        echo ('<div id="block">');
        echo(random_int(1, 10));
        echo ('</div>');
    }

    else {
        echo ('<div id="block">');
        echo(random_int(1, 12));
        echo ('</div>');
    }

$i++;
}
echo ('</div>');
echo "<form id='form' method='POST'>
        <input type='hidden' name='choixDes' id='choixDes' value='$choixDes'>
        <input type='hidden' name='choixFaces' id='choixFaces' value='$choixFaces'>
        <input id='relancer' type='submit' value='Relancer'>
      </form>";
echo '<div id="retour"><a id="lien" href="index.html">Retour</a></div>';
?> 

