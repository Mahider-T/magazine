<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
    <link href="style.css" rel = "stylesheet">
    <script src = "script.js" defer></script>
</head>
<body>
    <div id = "header_in_simple_post">
         <?php
             session_start();
             include('header.php');
             include('getBlogs.php');
         ?>
    </div>
    <div id = "simple_post_container">
        <?php foreach($query as $q)?>
        <main id = "simple_post_container_main">
            <div id = "simple_post_image">
                <h1><?php echo $q['title'] ?></h1>
                <sub><?php echo $q['publishdate'] ?></sub>
                <?php echo '<img alt="" src="data:image/;base64,'.base64_encode($q['image']).'"/>' ?>
            </div>
            <div id = "simple_post_text">
                <p><?php echo $q['body'] ?></p>
            </div>
            <figure>
                <?php echo '<img width="100px" height="100px" class = "writer" alt="" src="data:image/;base64,'.base64_encode($q['photo']).'"/>' ?>
                <figcaption>Author :<?php echo $q['authorname']?> 
                </figcaption><!--session name from joined tables -->
           </figure>
            
        </main>

        <aside id = "simple_post_container_aside">
            <?php foreach($queryOne as $q)?>
            <?php foreach($query as $Q)
                if($Q['title'] != $q['title'] || $Q['publishdate'] != $q['publishdate']) :?>                    
                    <div class="aside_list">
                    <h3><?php echo $q['title'] ?></h3><br>
                    <p><?php echo $q['body'] ?></p>
                    <sub><?php echo "BY - ". $q['authorname'] ?></sub>
                    <button class="aside_list_button">More</button>
                <?php endif;?>
            </div>
        </aside>
    </div>
    <div id = "footer_in_simple_post">
        <?php
            include('footer.php')
        ?>
    </div>
    
</body>
</html>