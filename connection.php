<?php
        session_start();
        define('site_url','http://localhost/SHAMIM/');

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname  ="stn";

        $conn = mysqli_connect($hostname, $username, $password, $dbname);

        if(mysqli_connect_error()){

                die('Connect Error('.mysqli_connect_error().')'
                               .mysqli_connect_error());
        }
          
?>

