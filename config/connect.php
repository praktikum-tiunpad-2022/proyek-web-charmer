<?php

    define("BASE_URL", "http://localhost:8080/proyek-web-charmer/");
    define("WEBNAME", "K-Pop Store!");
    $connect = mysqli_connect("localhost", "root", "", "olshop_charmer");

    if(!mysqli_select_db($connect, "olshop_charmer")) 
    {
        echo "Database Unconnected...";
    }

?>