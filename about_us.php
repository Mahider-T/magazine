<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include('header.php');
        include ('getBlogs.php');
    ?>
    <br><br><br>
    <!-- demo data about the editors -->
    <main class = "about_us">
        <div class = "about_header"><h1>About us</h1></div>
        
        <div class = "about1 left first_row">
            <img src = "Images/image2.jpg" width="100%" height="100%">
        </div>
        <div class = "about1 right first_row">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, sed. Perferendis unde accusantium porro hic dolores quam, reprehenderit maxime dignissimos dicta in pariatur atque culpa fugit neque provident assumenda Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi praesentium quasi esse ad vel, iste assumenda repellendus laborum aliquam molestias voluptatem, alias architecto officiis. Perferendis ratione laboriosam nobis vero fugiat!</p>
        </div>
        
        
        <div class = "about1 left second_row">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, sed. Perferendis unde accusantium porro hic dolores quam, reprehenderit maxime dignissimos dicta in pariatur atque culpa fugit neque provident assumenda Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi praesentium quasi esse ad vel, iste assumenda repellendus laborum aliquam molestias voluptatem, alias architecto officiis. Perferendis ratione laboriosam nobis vero fugiat</p>
        </div>
        <div class = "about1 right second_row">
            <img src = "Images/image4.jpg" width="100%" height="300px">
        </div>
        
        <div class = "about2 ">
            <h1> akdjfha ksdjfha</h1>
        </div>
        <div class = "about2 ">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, doloribus ea omnis, deleniti minus, voluptatibus nobis sapiente voluptates saepe nulla odio nam accusamus quos explicabo corporis temporibus earum. Numquam, incidunt?</p>
        </div>
        <div class = "about2 ">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, maxime eos? Sed doloribus dolor voluptatibus iste aspernatur autem quas veritatis asperiores omnis, consequuntur ex ratione modi perspiciatis maxime? Ex quia quasi inventore nisi labore, repellat asperiores iste odio porro iusto quibusdam praesentium consequatur aperiam eius? Ab, nam voluptate. Voluptatem, laudantium.</p>
        </div>
        
        <div class = "about1 left fourth_row">
            <img src = "Images/image4.jpg" width="100%" height="300px">
        </div>
        <div class = "about1 right fourth_row">
            <h1>01</h1>
        </div>
        <div class = "bottom_beauty">
            <div class = "bb_child bb_child_left">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ad laudantium possimus nisi ipsam. Vitae temporibus dicta amet, magnam nihil aliquid labore consequuntur pariatur unde explicabo fuga veniam placeat esse?</p>
            </div>
            <div class = "bb_child bb_child_right">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus veniam, provident corrupti in magnam accusamus, necessitatibus mollitia iste beatae perspiciatis pariatur non possimus tempora fugit nostrum. Vel atque deleniti tempore?</p>
            </div>
        </div>
        <!-- data fetched from the author table on database -->
        <div class = "group_members">
        <?php foreach($queryEditors as $q){ ?>
            <div class = "member_list">
                <?php echo '<img width="100px" height="100px" class="author" alt="" src="data:image/;base64,'.base64_encode($q['photo']).'"/>' ?>
                <sub><?php echo $q['name']?></sub>
                <sub>Editor</sub>
            </div>
        <?php }?> 
    </div>

    </main>

    <?php
        include('footer.php')
    ?>
</body>
</html>