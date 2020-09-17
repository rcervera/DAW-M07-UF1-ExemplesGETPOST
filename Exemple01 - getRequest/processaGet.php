<?php

// Es cridarà fent : http://...../processaGet.php?nom=Pere

// Versió 1
// Utilitzant array associatiu $_GET
if(isset($_GET['nom'])) // Sempre hem de comprovar que la posició existeixi!!
                         // per evitar l'error Undefined index: nom
{
    $nom = $_GET['nom'];
    echo "Hola, ".$nom."! ";
    echo "Com va la vida?<br>";
}
else {
	echo "Has d'entrar dades primer<br>";
	echo "Exemple: http://...../processaGet.php?nom=Pere<br>";
}

?>  

<?php
// Versió 2
// Utilitzant array associatiu $_REQUEST
if(isset($_REQUEST['nom'])) // Sempre hem de comprovar que la posició existeixi!!
{
    $nom = $_REQUEST['nom'];
    echo "Hola, ".$nom."! ";
    echo "Com va la vida?";
}
else {
	echo "Has d'entrar dades primer<br>";
	echo "Exemple: http://...../processaGet.php?nom=Pere<br>";
}


?>  
