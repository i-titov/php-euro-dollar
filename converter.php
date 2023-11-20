<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $type = $_POST["operation"];
    $amount = $_POST["amount"];
    $dollar = 0.92;
    $euro = 1.09;
    $result = $type == 'euro-to-dollar' ? $amount * $dollar : $amount * $euro;
    echo "Votre montant est: " . $result;
}
