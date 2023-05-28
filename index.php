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
        include('header.php')
    ?>
    <div class = "hero">
        <!-- <img src = "hero.jpg"  height="500px"> -->
        <div class = "button left-button"><a href= "#some_id"><img src = "Icons/left_circle_arrow.svg "></a></div>
        <div class="hero-text">
            <h2>What is this garbage?</h2><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing<br> 
                elit. Eos, numquam iure. Possimus perspiciatis quas 
                officiis.</p>
        </div>
        <div class = "button right-button"><img src = "Icons/right_circle_arrow.svg " id = "right_arrow"></div>
    </div>
    <main>
        <div class = "container">
            <!-- <div class = "test" style="height: 500px; width: 500px; background-color:aqua"></div> -->
            <div class = "divider divider_one">
                <h1>Who killed Jefferey?</h1><br>
                <img src="Images/ldr.jpg" width="100px" height="100px" class = "writer"><br>
                <sub style="color:gray">Lana Del Ray</sub>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores nobis atque debitis rem asperiores eveniet provident 
                    tempora eaque laudantium nisi voluptatibus assumenda incidunt 
                    dolorem fuga, omnis sit dolor reiciendis expedita sapiente facilis accusamus error iusto odio. 
                    Deserunt quod eaque sit iusto doloribus distinctio 
                    laborum, accusamus natus esse, mollitia suscipit maxime.</p>
            </div>
            <div class = "divider divider_two">
                <h1>Who killed Jefferey?</h1><br>
                <img src="Images/mia.jpg" width="100px" height="100px" class = "writer"><br>
                <sub style="color:gray">Mia Khalifa</sub>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Maiores nobis atque debitis rem asperiores eveniet provident 
                        tempora eaque laudantium nisi voluptatibus assumenda incidunt 
                        dolorem fuga, omnis sit dolor reiciendis expedita sapiente facilis accusamus error iusto odio. 
                        Deserunt quod eaque sit iusto doloribus distinctio 
                        laborum, accusamus natus esse, mollitia suscipit maxime.</p>
            </div>
            <div class = "divider divider_three">
                <h1>Who killed Jefferey?</h1><br>
                <img src="Images/dt.png" width="100px" height="100px" class = "writer"><br>
                <sub style="color:gray">Donald Trump</sub>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Maiores nobis atque debitis rem asperiores eveniet provident 
                        tempora eaque laudantium nisi voluptatibus assumenda incidunt 
                        dolorem fuga, omnis sit dolor reiciendis expedita sapiente facilis accusamus error iusto odio. 
                        Deserunt quod eaque sit iusto doloribus distinctio 
                        laborum, accusamus natus esse, mollitia suscipit maxime.</p>
            </div>
        </div>
    </main>
    <?php
        include('footer.php')
    ?>
</body>
</html>