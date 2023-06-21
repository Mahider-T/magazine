<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazine</title>
    <script src="script.js" defer></script> 
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <?php
    session_start();
    include("header.php");
    include('getBlogs.php');
    ob_start();
    include "auth.php";
    ob_end_clean();
    ?>
    <div class="hero" id="top_of_the_page">
        <img src="Images/image2.jpg" width="100%" height="100%" id="image1" style="object-fit:cover">
        <div class="overlay_elements">
            <!-- <div ><img src = "Icons/left_circle_arrow.svg" id = "left_arrow" width="50px" height="50px "></div> -->
            <div class="hero-text">
                <h2>What is this garbage?</h2><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing<br>
                    elit. Eos, numquam iure. Possimus perspiciatis quas
                    officiis.</p>
            </div>
            <!-- <div><img src = "Icons/right_circle_arrow.svg " id = "right_arrow" width="50px" height="50px"></div> -->
        </div>
    </div>
    <main>
        <br>
        <h1 id="homeTitle">Most Recent Blogs.</h1>
        <br>
        <hr color="#eeeeee">
        <div class="container">
            <!-- <div class = "test" style="height: 500px; width: 500px; background-color:aqua"></div> -->
            <!--suggestions of most recent 6 blogs-->
                <?php
                foreach ($query as $q) {?>
                        <div class="each_article">
                            <h1><?php echo $q['title'] ?></h1><br>
                            <?php echo '<img alt="" class = "suggestion_img" src="data:image/;base64,' . base64_encode($q['image']) . '"/>' ?><br>
                            <sub style="color:gray"><?php echo "By : " . $q['authorname'] ?></sub>
                            <div class="suggestion_p"><?php echo $q['body'] ?></div> <!--Sifen removed 'class = "fade-in"', it makes the text invisible-->
                            <a href="viewBlog.php?id=<?php echo $q['id'] ?>">
                                EXPLORE
                            </a>
                        </div>
                <?php } ?>
        </div>
        <a href id="next">next...</a>
    </main>
    <?php
    include('footer.php')
    ?>
</body>

</html>