<?php
    session_start();
    include('getBlogs.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header style="box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.6);">
        <div class = "top-header">         
                <p style="padding-left:55px">Magazine and newspaper with news around AAU</p>
                <img   src="Images/Addis_Ababa_University_logo.png" 
                       style="border: 0.35em solid inherit;border-left:0.9em solid inherit; border-bottom-right-radius:50%; 
                       background-color:inherit; width:6%; float:left; max-width:52px; position:absolute; top:-4px;left:0px;" 
                       alt="">
            <ul>
                <li><a href = "contact.html">Contact</a></li>
                <li><a href="auth.php">Login/Signup</a></li>
            </ul>
        </div>
        <div class = "bottom-header">
            <p id="newspaper">Newspaper.</p>
            <ul class = "text-nav">
                <li><a class="nav-link" href="index.php">Home page</a></li>
                <?php foreach($queryFour as $q){
                        if(true){
                        $id = $q['id'];
                        break;}
                     }
                ?>
                <li><a class="nav-link" href="viewBlog.php?id=<?php echo $id?>">Simple post</a></li>
                <li><a class="nav-link" href="about_us.php">About us</a></li>
                <li><a class="nav-link" href="blog.php" id = "blog">Blog</a></li>
            </ul>
            <ul class = "icon-nav">
                <li><a href="https://www.freepnglogos.com/pics/logo-ig-png" title="Image from freepnglogos.com"><img src="Icons/instagram_logo.png" width="24" alt="instagram logo" /></a></li>
                <li><a href="https://www.freepnglogos.com/pics/logo-facebookpng" title="Image from freepnglogos.com"><img src="Icons/facebook_logo.png" width="20" alt="Facebook logo " /></a></li>
                <li><a href="https://www.freepnglogos.com/pics/logo-twitter-png" title="Image from freepnglogos.com"><img src="Icons/twitter_logo.png" width="22" alt="twitter logo " /></a></li>
                <li><a href="https://t.me/+E3jGdJxYKAY4YmVk" title="Image from freepnglogos.com"><img src="Icons/telegram_logo.png" width="20" alt="telegram logo" /></a></li>
            </ul>
            <!--php to determine wether to show link to blog or not-->
            <?php
                ob_start();
                include "auth.php";
                ob_end_clean();
                if($_SESSION["adminFlag"] == false){
                echo "<script type = \"text/javascript\">
                        document.getElementById(\"blog\").style.display = \"none\";
                    </script>";
                }
            ?>
        </div>
    </header>  
    <script>
            let linkarray = Array.from(document.getElementsByClassName("nav-link"));
            linkarray[1].onclick = function(){
            linkarray[1].className = "activated";
            }
    </script>
</body>
</html>