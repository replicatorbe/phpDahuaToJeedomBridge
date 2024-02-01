<?php
function logging($text) {
    list($ts) = explode(".", microtime(true));
    $dt = new DateTime(date("Y-m-d H:i:s.", $ts));
    $logdate = $dt->format("Y-m-d H:i:s.u");
    echo $logdate . ": ";
    print_r($text);
    // Envoyer le texte vers l'API Jeedom
    $formattedText = urlencode($text);
    echo "\n";
    $jeedomValue = $formattedText;
    $jeedomCommand = "plugin=virtual&type=event&id=" . $jeedomVirtuelId . "&value=" . $jeedomValue . "&apikey=" . $jeedomApiKey;
    $jeedomRequestUrl = $jeedomUrl . "?" . $jeedomCommand;
    $ch = curl_init($jeedomRequestUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}
?>
