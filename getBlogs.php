<?php
    session_start();
    ob_start();
    include("auth.php");
    ob_end_clean();


    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "uni_mag";

    $connection  = mysqli_connect($host, $user, $pass, $db);
    if(!$connection){
        die("unable to connect.");
    }

    //query that select the recent 6 blogs for the home page
    $sql = "SELECT * 
            FROM blogs, author_information
            WHERE blogs.authorname = author_information.name
            ORDER BY id DESC LIMIT 6";
    $query = mysqli_query($connection, $sql);

    //query for viewBlogs page most recent blog other than the one currently viewed
    $sqlFour = " SELECT * 
                FROM blogs, author_information
                WHERE blogs.authorname = author_information.name
                ORDER BY id DESC LIMIT 2";//decide on 1 or 4 for the number of suggesstions
    $queryFour = mysqli_query($connection, $sqlFour);

    $Name = $_SESSION['Name'];
    //query for authors blogs on the left side of the blog page 
    $sqlBlogAside ="SELECT * 
                    FROM blogs, author_information
                    WHERE blogs.authorname = author_information.name AND 
                          blogs.authorname = '$Name'
                    ORDER BY id DESC LIMIT 4";
    $queryBlogAside = mysqli_query($connection, $sqlBlogAside);
    
    //query for the authors list on about us page
    $sqlEditors  = "SELECT * FROM author_information";
    $queryEditors = mysqli_query($connection, $sqlEditors);
    
    
    // echo "<script>alert('this is $Name')</script>";
    // $sqlAuthor = "SELECT * FROM blogs WHERE authorname = '$Name' ";
    // $queryAuthor = mysqli_query($connection, $sqlAuthor);

    //query which diplay specific contents of a blog if readmore is triggered
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * 
                FROM blogs, author_information
                WHERE blogs.authorname = author_information.name and blogs.id = $id";
        $query = mysqli_query($connection, $sql);
    }

?>