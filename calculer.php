<?php
$calcul = $_GET['calcul'];

if (str_contains($calcul, '*')) {
    echo "multiplication";
    $tblCalcul = explode("*", $calcul);
    echo $tblCalcul[0] * $tblCalcul[1];
}