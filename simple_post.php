<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple post</title>
    <link href="style.css" rel = "stylesheet">
    <script src = "script.js" defer></script>
</head>
<body>
    <div id = "header_in_simple_post">
         <?php
             include('header.php')
         ?>
    </div>
   
    <div id = "simple_post_container">
        <main id = "simple_post_container_main">
            <div id = "simple_post_image">
                <sub>Dec 13, 2020</sub>
                <img src= "Images/image4.jpg" width="100%" height="100%">
            </div>
            <div id = "simple_post_text">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores distinctio itaque sequi 
                    cupiditate doloremque consequatur voluptatum similique aspernatur 
                    praesentium dolores velit corrupti dolorem nulla laborum amet vel 
                    tenetur odio omnis, molestias culpa deleniti soluta? Et voluptatibus 
                    deserunt ad eos id, hic quos veritatis error nobis, laborum corporis, 
                    delectus velit? Assumenda saepe dolore eius inventore a nam tempora quisquam, 
                    dolorem magnam earum? </p>
                    <p>Odit, unde hic sapiente minus consequatur repudiandae nostrum 
                    expedita accusamus. Magnam cumque exercitationem, nobis voluptatibus blanditiis veritatis repudiandae 
                    labore hic voluptates provident, nisi at impedit numquam suscipit molestiae placeat architecto ab aperiam 
                    saepe facilis modi quos recusandae!</p> 
                    <p>Beatae optio labore dicta, explicabo numquam soluta et? Quae, reiciendis
                    est optio fuga temporibus hic deserunt eos nisi reprehenderit illum quam laborum qui aperiam. Omnis asperiores 
                    non recusandae aut iste nobis voluptas. Placeat, qui, omnis ut reiciendis aliquid numquam repellat eveniet accusantium
                    distinctio sequi dolorem. Obcaecati deserunt necessitatibus quisquam asperiores numquam nobis voluptates cupiditate voluptatibus, 
                    tempora nulla quam doloremque explicabo quae suscipit sed inventore laborum repellat exercitationem quod praesentium dolor cum similique 
                    ipsam perferendis! Voluptatum aut illo autem nobis praesentium, rem labore ea amet reprehenderit numquam ratione culpa tenetur provident 
                    deserunt nam temporibus molestias? Exercitationem esse modi qui iusto?</p> 
                    <p>Ea tempore cum delectus blanditiis similique accusantium fuga ratione deleniti sapiente nostrum, 
                    magnam ullam sequi voluptatibus voluptate pariatur, iste cupiditate dicta repellendus esse molestias tempora natus ut odio quam! Velit at consectetur officia veritatis 
                    dolor quam optio, voluptate distinctio perspiciatis voluptates eum laudantium libero assumenda nemo illum necessitatibus suscipit beatae. Iste porro quas mollitia, vitae
                    soluta explicabo inventore deserunt eaque velit pariatur magnam assumenda voluptas quos, corporis quo et, ex expedita aliquam voluptatem atque! Maiores explicabo quaerat 
                    officiis ipsum ullam assumenda, suscipit nihil totam odit tempora dignissimos hic sit nemo officia illo facere ipsam dicta? Ducimus laborum neque debitis dignissimos rem sed sit 
                    explicabo sapiente inventore ad enim eum commodi facere ut nisi, harum ex at,</p>
                    <p>quia corporis autem accusamus id officiis vel. Optio dolorum veniam ratione molestias atque non, sequi assumenda magni possimus? 
                    Ipsa deserunt facilis maxime voluptates blanditiis, temporibus dolorem aperiam quidem officiis esse iusto, quia hic odit voluptatum minima dolor fugiat dignissimos? Corporis facilis cumque quas mollitia magni 
                    at natus placeat itaque accusantium dolore voluptatum reiciendis, neque velit expedita quia quos tempora. Eveniet suscipit unde, enim soluta veniam rerum et? Ex excepturi consectetur ducimus quod corrupti quia ipsa veniam, 
                    sed dolorem impedit incidunt tenetur rerum blanditiis. Deleniti eius impedit vero.</p>
            </div>
            
        </main>

        <aside id = "simple_post_container_aside">
            <div class="aside_list">
                <h3>Title</h3><br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga magnam quod praesentium enim 
                    a aut exercitationem id sapiente sit voluptatum.</p>
                <button class="aside_list_button">More</button>
            </div>

            <div class="aside_list">
            <h3>Title</h3><br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga magnam quod praesentium enim 
                    a aut exercitationem id sapiente sit voluptatum.</p>
                <button class="aside_list_button">More</button>
            </div>

            <div class="aside_list last">   
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