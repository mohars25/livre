<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
require "./Auteur.php";
require "./Livre.php";

$auteur = new Auteur("Stephen", "King");
$livre1 = new Livre("CA", 1138, 1886, 20, $auteur);
$livre2 = new Livre("Simetierre", 374, 1983, 15, $auteur);
$livre2 = new Livre("Le Fléau", 823, 1978, 14, $auteur);
$livre2 = new Livre("Shining", 447, 1977, 16, $auteur);

echo $auteur->afficherBibliographie();
?>
</body>
</html>





