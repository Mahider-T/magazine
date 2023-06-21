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
        .asideBody {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            width: 100%;
            margin-bottom: 5px;
            color: #6b2929;
        }

        .upload {
            display: none;
        }

        #uploadFile button {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            color: rgb(0, 0, 0);
            cursor: pointer;
            transition: background .2s ease-in-out;
            background-color: rgb(250, 230, 180);
            text-transform: uppercase;
            font-family: monospace;
        }

        #uploadFile button:hover {
            background-color: rgb(250, 215, 126);
        }
        #buttons {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        #buttons input, #buttons a{
            border-radius: 10px;
            color: rgb(0, 0, 0);
            cursor: pointer;
            transition:background .2s ease-in-out;
            background-color: rgb(244, 244, 244);
            text-transform: uppercase;
            font-family: monospace;
            /* align-self: center;
            text-align: center; */
            border: 1px solid #888;
            font-size: large;
            min-width: fit-content;
            padding: 1% 3%;
            width:auto;
            height: auto;
            margin: auto;
            margin-top: 1%;
            text-decoration: none;
        }
        #submit:hover{
            margin-top: 0.8%;
            background-color: rgb(244, 244, 244);
            border : 1.5pt  solid rgb(35, 108, 9, 0.6);
        }
        #delete:hover{
            margin-top: 0.8%;
            border : 1.5pt  solid rgb(108, 9, 9, 0.6);
        }
        #cancel:hover{
            margin-top: 0.8%;
            border: 1.5pt solid #888;
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
    $id = $_REQUEST['id'];
    ?>
    <div id="main_container" style="background-color:whitesmoke">
        <aside id="blog_aside" style="height: 750px;
                                    margin-left:0.5%;">
            <div id="blog_aside_header">
                <h1>My Blogs</h1>
            </div>
            <?php foreach ($queryBlogAside as $q) { ?>
                <div class="blog_list">
                    <h1><?php echo $q['title'] ?></h1>
                    <div class="asideBody"><?php echo $q['body'] ?></div>
                    <a href="viewBlog.php?id=<?php echo $q['id'] ?>&edit=1"><button class="read_more" title="Explore this blog">Read more
                        </button></a>
                </div>
            <?php } ?>

        </aside>
        <main id="content_area" style="height: 870px;
                                     border: 0.12rem solid rgb(191, 191, 191);">
            <?php foreach ($query as $q) { ?>
                <form id="form" action="editBlog.php?id=<?php echo $_REQUEST['id']?>" method="post" enctype="multipart/form-data">
                    <section id="blogHeader">
                        <h1>Welcome back <?php echo $_SESSION['Name'] ?> !</h1>
                        <hr color="#a40434" style="margin:10px 0px 10px -25px">
                        <div id="uploadFile">
                            <label id="labelUpload" class="upload" for="image">Drop your image here <br> or </label>
                            <input id="uploadInput" type="file" class="upload" name="image" accept="image/*" title="insert an image related to your blog">
                            <span id="uploadSpan">Current Image: <?php echo $q['iname'] ?><br> type: <?php echo $q['type'] ?></span>
                            <button type="button"  id="uploadButton">Change Image</button>
                        </div>
                        <input class="inputs" type="text" name="title" id="title" placeholder="Enter blog title here." required value="<?php echo $q['title'] ?>">
                    </section>
                    <textarea name="body" id="body" minlength="300" maxlength="10000" style="min-height:380px; padding: 30px 40px; border: 1px solid #727272;border-radius:3px;" class="textarea" placeholder="- Enter the blog content here
- Place your paragraphs in a  <p></p>  tag. 
- All other standard mark up tags are also supported
- minimum 300 and maximum 10,000 characters" required><?php echo $q['body'] ?>
            </textarea>
                <?php } ?>
                <div id="buttons">
                    <input type="submit" value="confirm" id="submit" title="Post my draft !"><br><br>
                    <a href="viewBlog.php?id=<?php echo $id?>&edit=1" id="cancel" title="quit editing">cancel</a>
                    <a href="blog.php?id=<?php echo $id?>&delete=1" id="delete" title="delete post">delete</a>
                </div>
                </form>
        </main>
        <!--php form handling-->
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { //check if form is submitted
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
            if (!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name'])) {
                $sql = "UPDATE blogs set title = '$title', body = '$body' where id = $id ";
                $thequery = mysqli_query($connection, $sql);
            } else //if image file has been uploaded
            {
                $info = getimagesize($image["tmp_name"]);
                // check if $image is an image file
                if (!$info) {
                    die("file is not a supported image format !");
                }
                $name = $image["name"];
                $type = $image["type"];
                $blob = addslashes(file_get_contents($image["tmp_name"]));

                //update the table data
                $sql = "UPDATE blogs set title = '$title', body = '$body', image = '$blob', iname = '$name', type = '$type'  where id = $id ";
                $thequery = mysqli_query($connection, $sql);
            }

            //check if insertion was a success 
            if ($connection->query($sql) === TRUE) {
                echo "<script>
                    alert('Edit successful!');
                    </script>";
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
    <script>
        let uploadButton = document.getElementById("uploadButton");
        let uploadSpan = document.getElementById("uploadSpan");
        let uploadInput = document.getElementById("uploadInput");
        let uploadLabel = document.getElementById("labelUpload");

        uploadButton.onclick = function() {
            uploadButton.style.display = "none";
            uploadSpan.style.display = "none";
            uploadInput.style.display = "initial";
            uploadLabel.style.display = "initial";
        }
    </script>
</body>

</html>