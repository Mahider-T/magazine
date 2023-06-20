<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="blogstyle.css" rel="stylesheet">
    <script src="script.js" defer></script>

    <style>
        .asideBody{
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    width: 100%;
    margin-bottom: 5px;
    color: #6b2929;
    
}
    </style>
</head>
<body> 
<?php
    session_start();
    include("header.php");
    include("getBlogs.php");
    ob_start();
    include "auth.php";
    ob_end_clean();

    //deletion query 
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];
        $deletesql = "DELETE FROM blogs WHERE id = $id";
        $query = mysqli_query($connection, $deletesql);
    }
?>
<div id = "main_container" 
        style="background-color:whitesmoke"
    >
    <aside id = "blog_aside" style="height: 750px;
                                    margin-left:0.5%;">
        <div id = "blog_aside_header">
            <h1>My Blogs</h1>
        </div>
        <?php foreach($queryBlogAside as $q){ ?>
            <div class = "blog_list">
            <h1><?php echo $q['title']?></h1>
            <div class="asideBody"><?php echo $q['body']?></div>
            <a href="viewBlog.php?id=<?php echo $q['id']?>&edit=1"><button class="read_more" title="Explore this blog">Read more
            </button></a>
        </div>
        <?php }?>        
        
    </aside>
    <main id = "content_area" style="height: 870px;
                                     border: 0.12rem solid rgb(191, 191, 191);">
        <form id = "form" action="blog.php" method="post" enctype="multipart/form-data">
            <section id="blogHeader">
                <h1>Welcome back <?php echo $_SESSION['Name']?> !</h1> 
                <hr color="#a40434" style="margin:10px 0px 10px -25px">   
                <ul>
                    <li>write your blogs here to share your stories about Addis Ababa University.</li>
                    <li>upload an image related to your blog to add a visual layer to your message.</li>
                    <li>exlpore your previous posts in "My blogs" section</li>
                </ul> 
                <div id="uploadFile">
                    <label id="labelUpload" for="image">Drop your image here <br> or </label>
                    <input type="file" name="image" accept="image/*" title="insert an image related to your blog"/>
                </div>
                <input class="inputs" type="text" name="title" id="title"  placeholder="Enter blog title here." required>
                <!--<textarea cols="30" rows="15" id = "body" name="body" ></textarea><br><br> -->
            </section>
            <textarea name="body" id="body" minlength="300" maxlength="10000" style="min-height:400px;padding: 30px 40px; border: 1px solid #727272;border-radius:3px;" class="textarea" placeholder="- Enter the blog content here
- Place your paragraphs in a  <p></p>  tag. 
- All other standard mark up tags are also supported
- minimum 300 and maximum 10,000 characters" required></textarea>
            <input type = "submit" value="Post" id = "submit" title="Post my draft !"><br><br>
                <!-- <input type = "file" id = "upload_file"> -->
            </form>
    </main>
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
                $author_name = $_SESSION['Name'];
                $title = $_POST['title'];
                $body = $_POST['body'];
                $image = $_FILES["image"];

                 
                //check if image file has been not been uploaded
                if (!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name'])) 
                {
                    $sql = "INSERT INTO blogs (authorname, title, body)
                    VALUES ('$author_name','$title', '$body')";
                }
                else //if image file has been uploaded
                {
                    $info = getimagesize($image["tmp_name"]);
                    // check if $image is an image file
                    if(!$info)
                    {
                        die("file is not a supported image format !");
                    }                
                    $name = $image["name"];
                    $type = $image["type"];
                    $blob = addslashes(file_get_contents($image["tmp_name"]));              
                
                    //Insert data into the database
                    $sql = "INSERT INTO blogs (authorname, `image`, `iname`, `type`, title, body)
                    VALUES ('$author_name','$blob','$name', '$type', '$title', '$body')";
                }                

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
<?php
    include("footer.php");
?>

</body>
</html>