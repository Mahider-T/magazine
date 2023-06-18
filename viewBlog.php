<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
    <link href="viewBlog.css" rel = "stylesheet">
    <script src = "script.js" defer></script>
    <style>
        .aside_list_body{
            color: blue;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            width: 100%;
            margin-bottom: 5px;
         color: #171717;
        }
    </style>
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
        <?php 
        foreach($query as $q)?>
        <main id = "simple_post_container_main">
            <div id = "simple_post_image">
                <h1 id="blogTitle"><?php echo $q['title'] ?></h1>
                <sub><?php echo $q['publishdate'] ?></sub>
                <br><hr color="#eeeeee" style="height: 0.005rem;"><br>
                <?php echo '<img alt="" src="data:image/;base64,'.base64_encode($q['image']).'"/>' ?>
            </div>
            <div id = "simple_post_text">
                <p><?php echo $q['body'] ?></p> <!--decide on the pre tag-->
            </div>
            <br><hr color="#eeeeee" style="height: 0.005rem;"><br>
            <figure>
                <?php echo '<img width="100px" height="100px" class = "writer" alt="" src="data:image/;base64,'.base64_encode($q['photo']).'"/>' ?>
                <figcaption>Author :<?php echo $q['authorname']?> 
                </figcaption><!--session name from joined tables -->
           </figure>
            
        </main>

        <aside id = "simple_post_container_aside">
            <?php foreach($query as $Q){?>
            <?php foreach($queryFour as $q){?>
                <?php if($Q['title'] != $q['title'] || $Q['publishdate'] != $q['publishdate']) :?>                    
           <div class="aside_list">
                    <h1 class="aside_list_title"><?php echo $q['title']?></h1><br>
                    <p class="aside_list_body"><?php echo $q['body'] ?></p>
                    <sub class="aside_list_author"><?php echo "BY - ". $q['authorname'] ?></sub>
                    <a href="viewBlog.php?id=<?php echo $q['id'] ?>">
                    <button class="aside_list_button">explore</button>
                    </a>
                    <?php endif;?>
                    <?php }?>
                    <?php }?>
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