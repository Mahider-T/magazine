<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazine</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
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
    <div class = "hero" id = "top_of_the_page">
        <img src = "Images/image2.jpg" width="100%" height="100%" id = "image1" style="object-fit:cover">
        <div class = "overlay_elements">
            <!-- <div ><img src = "Icons/left_circle_arrow.svg" id = "left_arrow" width="50px" height="50px "></div> -->
            <div class="hero-text">
                <h2 >What is this garbage?</h2><br>
                <p >Lorem ipsum dolor sit, amet consectetur adipisicing<br> 
                    elit. Eos, numquam iure. Possimus perspiciatis quas 
                    officiis.</p>
            </div>
            <!-- <div><img src = "Icons/right_circle_arrow.svg " id = "right_arrow" width="50px" height="50px"></div> -->
        </div>
    </div>
    <main>
        <div class = "container">
            <!-- <div class = "test" style="height: 500px; width: 500px; background-color:aqua"></div> -->
            <div class = "divider " id = "divider_one">
                <?php foreach($query as $q){ ?>
                    <div class = "each_article " id = "article11">
                        <h1><?php echo $q['title']?></h1><br>
                        <?php echo '<img width="100px" height="100px" class = "writer" alt="" src="data:image/;base64,'.base64_encode($q['photo']).'"/>' ?>
                        <sub style="color:gray"><?php echo $q['authorname']?></sub>
                        <p><?php echo $q['body']?></p> <!--Sifen removed 'class = "fade-in"', it makes the text invisible-->
                        <a href="viewBlog.php?id=<?php echo $q['id']?>">
                            READ MORE
                        </a>
                    </div>
                <?php }?>
                <!--<div class = "each_article " id = "article12">
                    <h1>Who killed Jefferey?</h1><br>
                    <img src="Images/dt.png" width="100px" height="100px" class = "writer"><br>
                    <sub style="color:gray">Donald Trump</sub>
                    <p class = "fade-in">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Maiores nobis atque debitis rem asperiores eveniet provident 
                            tempora eaque laudantium nisi voluptatibus assumenda incidunt 
                            dolorem fuga, omnis sit dolor reiciendis expedita sapiente facilis accusamus error iusto odio. 
                            Deserunt quod eaque sit iusto doloribus distinctio 
                            laborum, accusamus natus esse, mollitia suscipit maxime.</p>
                </div>
            </div>
            <div class = "divider " id = "divider_two">
                <div class = "each_article " id = "article21">
                    <h1>Who killed Jefferey?</h1><br>
                    <img src="Images/mia.jpg" width="100px" height="100px" class = "writer"><br>
                    <sub style="color:gray">Mia Khalifa</sub>
                    <p class = "fade-in">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Maiores nobis atque debitis rem asperiores eveniet provident 
                            tempora eaque laudantium nisi voluptatibus assumenda incidunt 
                            dolorem fuga, omnis sit dolor reiciendis expedita sapiente facilis accusamus error iusto odio. 
                            Deserunt quod eaque sit iusto doloribus distinctio 
                            laborum, accusamus natus esse, mollitia suscipit maxime.</p>
                </div>
                <div class = "each_article" id = "article22">
                    <h1>Who killed Jefferey?</h1><br>
                    <img src="Images/dt.png" width="100px" height="100px" class = "writer"><br>
                    <sub style="color:gray">Donald Trump</sub>
                    <p class = "fade-in">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Maiores nobis atque debitis rem asperiores eveniet provident 
                            tempora eaque laudantium nisi voluptatibus assumenda incidunt 
                            dolorem fuga, omnis sit dolor reiciendis expedita sapiente facilis accusamus error iusto odio. 
                            Deserunt quod eaque sit iusto doloribus distinctio 
                            laborum, accusamus natus esse, mollitia suscipit maxime.</p>
                </div>
            </div>
            <div class = "divider" id = "divider_three">
                <div class = "each_article " id = "article31" >
                    <h1>Who killed Jefferey?</h1><br>
                    <img src="Images/dt.png" width="100px" height="100px" class = "writer"><br>
                    <sub style="color:gray">Donald Trump</sub>
                    <p class = "fade-in">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Maiores nobis atque debitis rem asperiores eveniet provident 
                            tempora eaque laudantium nisi voluptatibus assumenda incidunt 
                            dolorem fuga, omnis sit dolor reiciendis expedita sapiente facilis accusamus error iusto odio. 
                            Deserunt quod eaque sit iusto doloribus distinctio 
                            laborum, accusamus natus esse, mollitia suscipit maxime.</p>
                </div>
                <div class = "each_article " id = "article32">
                    <h1>Who killed Jefferey?</h1><br>
                    <img src="Images/dt.png" width="100px" height="100px" class = "writer"><br>
                    <sub style="color:gray">Donald Trump</sub>
                    <p class = "fade-in">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Maiores nobis atque debitis rem asperiores eveniet provident 
                            tempora eaque laudantium nisi voluptatibus assumenda incidunt 
                            dolorem fuga, omnis sit dolor reiciendis expedita sapiente facilis accusamus error iusto odio. 
                            Deserunt quod eaque sit iusto doloribus distinctio 
                            laborum, accusamus natus esse, mollitia suscipit maxime.</p>
                </div>-->
            </div>
        </div>
    </main>
    <?php
        include('footer.php')
    ?>
</body>
</html>