<?php
    $titre = "Bienvenue";
    $titre_secondaire = "Bienvenue";
    ob_start();
?>

    <a href="index.php?action=listMovies">Voir les films disponibles</a>
    <br>
    <a href="index.php?action=listActors">Voir la liste des acteurs</a>


<?php 
    $contenu = ob_get_clean();
    require "view/template.php";
?>
