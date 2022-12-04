<?php
    define("BASE_URL", "http://localhost:8080/project-web-charmer/");
    define("WEBNAME", "I Charmer U");
    $connect = mysqli_connect("localhost", "root", "", "olshop_charmer");

    if(!mysqli_select_db($connect, "olshop_charmer")) {
        echo "Database Unconnected...";
    }
?>