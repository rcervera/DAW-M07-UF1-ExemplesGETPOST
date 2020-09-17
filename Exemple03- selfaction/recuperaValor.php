<html>
<body>

    <form method="post" action="recuperaValor.php">

        <?php
        if(isset($_POST['numero'])) {
         echo '<input type="text" name="numero"  value="'.$_POST['numero'].'" >';
        }
        else {
            echo '<input type="text" name="numero">';
        }
        ?>
        <input type="submit" value="Enviar">
    </form>

    
<?php
if(isset($_POST['numero']) && $_POST['numero']!="" && is_numeric($_POST['numero'])===true )
	echo "<br>Has enviat el numero ".$_POST['numero'];

?>

</body>
</html>
