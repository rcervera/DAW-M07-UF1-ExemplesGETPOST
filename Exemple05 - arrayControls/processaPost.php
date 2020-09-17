<?php

if(isset($_POST['llista'])) 
{
    echo "<b>Has seleccionat de la llista els següents elements:</b><br>";
    foreach($_POST['llista'] as $element) {
        echo $element."<br>";
    }
}

if(isset($_POST['casella'])) 
{
    echo "<b>Has seleccionat dels checkboxes els següents elements:</b><br>";
    foreach($_POST['casella'] as $element) {
        echo $element."<br>";
    }
}

if(isset($_POST['caixa'])) 
{
    echo "<b>Has emplenat les caixes amb els valors:</b><br>";
    foreach($_POST['caixa'] as $element) {
        echo $element."<br>";
    }
}