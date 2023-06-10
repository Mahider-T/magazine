<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "uni_mag";

    $connection  = mysqli_connect($host, $user, $pass, $db);
    if(!$connection){
        die("unable to connect.");
    }

    $sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 6";
    $query = mysqli_query($connection, $sql);

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM blogs WHERE id = $id ";
        $query = mysqli_query($connection, $sql);
    }

?>