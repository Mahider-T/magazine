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
            
        </main>

        <aside id = "simple_post_container_aside">
            <div class="aside_list">
                <h3>Title</h3><br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga magnam quod praesentium enim 
                    a aut exercitationem id sapiente sit voluptatum.</p>
                <button class="aside_list_button">More</button>
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