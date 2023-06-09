<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="style.css" rel = "stylesheet">
    <script src="script.js" defer></script>
</head>
<body>
<?php
    include("header.php");
?>
<div id = "main_container">
    <aside id = "blog_aside">
        <div id = "blog_aside_header">
            <h1>Recently Added</h1>
        </div>
        <div class = "blog_list">
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, facere. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, mollitia.</p>
            <button class="read_more">Read more</button>
        </div>
        <div class = "blog_list ">
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, facere.</p>
            <button class="read_more">Read more</button>
        </div>
        <div class = "blog_list ">
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, facere.</p>
            <button class="read_more">Read more</button>
        </div>
        <div class = "blog_list ">
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, facere.</p>
            <button class="read_more">Read more</button>
        </div>
        
    </aside>
    <main>
        <div id = "content_area">
            <form id = "form" action="blog.php" method="post" enctype="multipart/form-data">
                <label for = "post_field"> <h1>Write post here<h1></label>

                <input class="inputs" id="author_name" name="author_name" type="text"placeholder="Enter author's name here." required></input>
                
                <label for="image">Upload Image</label>
                <input type="file" name="image" accept="image/*" title="insert an image related to your blog"/>

                <input class="inputs" type="text" name="title" id="title"  placeholder="Enter blog title here." required>
                
                <textarea id = "body" name="body" placeholder="Enter the blog content here." required></textarea><br><br>
                
                <input type = "submit" value="Post" id = "submit"><br><br>
                
                <input type = "file" id = "upload_file">
            </form>
            <!--php form handling-->
            <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){//check if form is submitted
                //connect to the database
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "uni_mag";

                $connection = new mysqli($host, $user, $pass, $db) or die("unable to connect");
                //check for duplicated daily post -- not done yet 
                    // $sqluser = "SELECT username FROM user_information WHERE username = '$username'";
                    // $qresult=mysqli_query($connection, $sqluser);
                    // $count=mysqli_num_rows($qresult);

                    // if($count > 0)
                    // {
                    //     echo"<div id=\"submit_replyE\">Username is already taken</div>";
                    // }
                    // else{
                
                // Retrieve form data
                $author_name = $_POST['author_name'];
                $title = $_POST['title'];
                $body = $_POST['body'];
                $image = $_FILES["image"];
                $info = getimagesize($image["tmp_name"]);
                // check if $image is an image file
                if(!$info)
                {
                    die("File is not an image");
                }
                $name = $image["name"];
                $type = $image["type"];
                $blob = addslashes(file_get_contents($image["tmp_name"]));

                //Insert data into the database
                $sql = "INSERT INTO blogs (authorname, `image`, `name`, `type`, title, body)
                VALUES ('$author_name','$blob','$name', '$type', '$title', '$body')";
                mysqli_query($connection, $sql) or die(mysqli_error($connection));

                //check if insertion was a success 
                if ($connection->query($sql) === TRUE) {
                    echo "<script>
                    alert('post successful!');
                    let = content_area = document.getElementById('content_area');
                    content_area.innerHTML = 'Blog posted successfully!';
                    </script>
                    <a href='index.php'>back to to home</a>";
                }
                // else{
                //     echo "<script>alert(\"couldn't record your data. please try again!\")</script>";
                // }
        }
        ?>
        </div>
    </main>
</div>
<?php
    include("footer.php");
?>

</body>
</html>