<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "uni_mag";

    $connection  = mysqli_connect($host, $user, $pass, $db);
    if(!$connection){
        die("unable to connect.");
    }

    //query that select the recent 6 blogs for the home page
    $sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 6";
    $query = mysqli_query($connection, $sql);

    $sqlOne = "SELECT * FROM blogs ORDER BY id DESC LIMIT 2";
    $queryOne = mysqli_query($connection, $sqlOne);

    //query which diplay specific contents of a blog if readmore is triggered
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * 
                FROM blogs, author_information
                WHERE blogs.authorname = author_information.name and blogs.id = $id";
        $query = mysqli_query($connection, $sql);
    }

?>