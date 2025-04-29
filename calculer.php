<?php
$calcul = $_GET['calcul']; # string

if (str_contains($calcul, '*')) { # true si * dans le string
    echo "multiplication";
    $tblCalcul = explode("*", $calcul);
    echo $tblCalcul[0] * $tblCalcul[1];
}