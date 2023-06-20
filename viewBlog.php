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
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            width: 100%;
            margin-bottom: 5px;
            color: #171717;
            height: fit-content;
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
        <h1 id="blogTitle"><?php echo $q['title'] ?></h1>
        <hr color="#eeeeee" style="width:100%; height: 0.003rem;"><br>
            <div id = "simple_post_image">
                <?php echo '<img alt="" src="data:image/;base64,'.base64_encode($q['image']).'"/>' ?>
            </div>
            <sub style="font-size: 15px;"><?php echo $q['publishdate'] ?></sub>
            <div id = "simple_post_text">
            <hr color="#eeeeee" style="height: 0.005rem;"><br>    
            <?php echo $q['body']?><!--decide on the pre tag-->
            <br><hr class ="title" color="#eeeeee" style="height: 0.005rem;"><br>
            </div>
            <figure>
                <?php echo '<img id="writer" alt="" src="data:image/;base64,'.base64_encode($q['photo']).'"/>' ?>
                <figcaption>Author :<?php echo $q['authorname']?> 
                </figcaption><!--session name from joined tables -->
           </figure>
           <a href="editBlog.php?id=<?php echo $_REQUEST['id']?>" id="editButton" 
                    style="display: none; text-decoration:none;
                         margin: 50px 10px 20px 10px;
                         text-transform:uppercase; padding: 8px 80px; 
                          font-family:monospace;
                         font-size: 22px;
                         background-color:rgb(244, 244, 244);
                         border-radius:8px;
                         border: 1px solid rgb(209, 209, 209);
                        ">Edit</a>
          
        </main>

        <aside id = "simple_post_container_aside">
            <?php foreach($query as $Q){?>
            <?php foreach($queryFour as $q){?>
                <?php if($Q['title'] != $q['title'] || $Q['publishdate'] != $q['publishdate']) :?>                    
                <div class="aside_list">
                    <h1 class="aside_list_title"><?php echo $q['title']?></h1><br>
                    <div class="aside_list_body"><?php echo $q['body'] ?></div>
                    <sub><?php echo "By : ". $q['authorname'] ?></sub>
                    <a href="viewBlog.php?id=<?php echo $q['id'] ?>">
                    <button class="aside_list_button">explore</button>
                    </a>
                </div>
                <?php endif;?>
                <?php }?>
                <?php }
                
                    if(isset($_REQUEST['edit'])){
                        echo "<script>document.getElementById('editButton').style.display = 'initial'</script>";
                    }
                
                ?>
        </aside>
    </div>
    <div id = "footer_in_simple_post">
        <?php
            include('footer.php')
        ?>
    </div>
    
</body>
</html>