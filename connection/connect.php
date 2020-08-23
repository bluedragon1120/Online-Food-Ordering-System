<?php
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://";   
    else  
        $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   

    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];   

    //main connection file for both admin & front end
    $servername = "localhost"; //server
    $username = "root"; //username
    $password = ""; //password
    $dbname = "online_rest";  //database

    // Create connection
    $db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
    // Check connection
    if (!$db) {       //checking connection to DB	
        die("Connection failed: " . mysqli_connect_error());
    }
?>