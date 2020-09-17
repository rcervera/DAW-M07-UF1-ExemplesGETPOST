<?php
// Versió 1
// Utilitzant array associatiu $_POST
if(isset($_POST['nom'])) // Sempre hem de comprovar que la posició existeixi!!
                         // per evitar l'error Undefined index: nom
{
    $nom = $_POST['nom'];
    echo "Hola, ".$nom."! ";
    echo "Com va la vida?<br>";
}
else echo "Error: Has d'entrar dades primer en el formulari!<br>";
// Aquest error es mostrarà si s'intenta cridar processaPost.php 
// directament des del navegador. Prova-ho!
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
else echo "Error: Has d'entrar dades primer en el formulari!";

?>  


