<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="style.css" rel = "stylesheet">
    <script src="script.js" defer></script>
</head>
<body>
    <?php
        include('header.php')
    ?>
    <div id = "main_container">
        <aside id = "blog_aside">
            <div id = "blog_aside_header">
                <h1>Blogs</h1>
            </div>
            <div class = "blog_list">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, facere. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, mollitia.</p>
                <button class="read_more">Read more</button>
            </div>
            <div class = "blog_list ">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, facere.</p>
                <button class="read_more">Read more</button>
            </div>
            <div class = "blog_list ">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, facere.</p>
                <button class="read_more">Read more</button>
            </div>
            <div class = "blog_list ">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, facere.</p>
                <button class="read_more">Read more</button>
            </div>
            <div class = "blog_list ">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, facere.</p>
                <button class="read_more">Read more</button>
            </div>
            <div class = "blog_list ">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, facere.</p>
                <button class="read_more">Read more</button>
            </div>
            
        </aside>
        <main>
            <div id = "content_area">
                <form id = "form">
                    <label for = "write_post"> <h1>Write post here<h1></label>
                    <textarea id = "write_post"></textarea><br><br>
                    <input type = "submit" value="Post" id = "submit"><br><br>
                    <input type = "file" id = "upload_file">
                </form>

            </div>
        </main>
    </div>
    <?php
        include('footer.php') 
    ?>

</body>
</html>