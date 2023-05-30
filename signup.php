<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Nanum+Myeongjo&family=Shadows+Into+Light&display=swap'); */
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
        *{
            margin: 0;
            padding: 0;
        }
        .auth_page{
            display: flex;
            margin-top: 100px;

        }
        .right{
            display: flex;
            min-width: 50vw;
            height: 100vh;
            border: 2px solid black;
            box-sizing: border-box;
            margin: 5px;
            background-color: green;
        }
        /* .right img{
            object-fit: contain;

        } */
        .left{
            display: flex;
            flex-direction: column;
            min-width: 50vw;
            height: 100vh;
            border: 2px solid black;
            box-sizing: border-box;
            margin: 5px;
            padding: 30px;
            justify-content: space-between;
        }
        .left div{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .left .icon{
            margin-bottom: -50px;
        }
    </style>
</head>
<body>
    <?php
        include('header.php')
    ?>
    
    <div class = "auth_page">
        <div class="left">


            <div class = "icon"><img src ="Icons/logo.svg" width="80px" height="80px"></div>
            <div class="header"><h1>Welcome</h1></div>


            <div class = "form">
                <form action="" method = "" name = "">
                    <label for="username">Username</label><br>
                    <input name = "username" id = "username" type = "text"><br><br>
                    <label for="password">Password</label><br>
                    <input name = "password" id = "password" type = "password"><br><br>
                    <label for="repear">Repeat password</label><br>
                    <input name = "repeat" id = "repeat" type = "password"><br><br>
                    <input type="submit" id = "login" value="Register">
                </form>
            </div>
        </div>
        <div class = "right">
        <!-- <img src="Images/image6.jpg" width="100%" height="100%"  class="side_image"> -->
    </div>
    </div>
    
</body>
</html>
