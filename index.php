<?php
    require_once('classes.php');

    $professor = new professor('Ciro Gomes', 809010, 18);

    echo $professor->getNome();
?>