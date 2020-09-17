<h1>Contingut Array associatiu $_POST</h1>
<table>
    
    <tr><td><b>[Posició]</b></td><td><b>Valor</b></td></tr>
<?php

foreach ($_POST as $key => $value) {
    
    echo "<tr><td>\"".$key."\"</td><td>".$value."</td></tr>";
}

?>
    
</table>
