<?php
    $server = "localhost";
    $user ="Slammad";
    $key = "Slammad42";
    $db = "chat" ;

    $db = mysqli_connect($server,$user,$key,$db) or die("Failed to connect");
?>