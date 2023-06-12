<?php
    session_start();
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

<header>
        <div class = "top-header">
            <p>Magazine and newspaper with news around AAU</p>
            <ul>
                <li><a href = "contact.html">Contact</a></li>
                <li><a href="login.php">Login/Signup</a></li>
            </ul>
        </div>
        <div class = "bottom-header">
            <p>Newspaper.</p>
            <ul class = "text-nav">
                <li><a href="index.php">Home page</a></li>
                <li><a href="simple_post.php">Simple post</a></li>
                <li><a href="about_us.php">About us</a></li>
                <li><a href="blog.php" id = "blog">Blog</a></li>
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
</body>
</html>