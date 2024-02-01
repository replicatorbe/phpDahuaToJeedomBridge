<?php
include 'config.php';
include 'dahua_functions.php';
include 'utilitaires.php';

$Dahua = new Dahua_Functions($ipadressedahua, $login, $password);
$status = $Dahua->Main();
?>
