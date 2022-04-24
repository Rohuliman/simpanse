<?php 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "https://geof.bmkg.go.id/slmon/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    echo $output;
?>