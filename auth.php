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
            width: 50vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            padding-right: 10px;
            flex-shrink: 1;
            min-width: 550px;

        }
        .welcome{
            font-family: 'Times New Roman', Times, serif;
            font-family: 'Great Vibes', cursive;
            margin-bottom: 30px;
            font-size: 50px;
        }
        label{
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;

        }
        body{
            display: flex;
        }
        #username,#password{
            width: 400px;
            height: 35px;
            margin-bottom: 10px;
        }
        #login, button{
            width: 400px;
            height: 45px;
            background-color: black;
            color: white;
            margin-top: 10px;
            border-radius: 10px;

        }
        .low{
            display: flex;
            width:400px;
            justify-content: space-between;
        }
        .header{
           margin-bottom:auto;
           margin-top: 50px;
        }
        footer{
            margin-top: auto;
            margin-top: auto;
        }
        .side_img{
           object-fit:contain; 
           flex-shrink: 2;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .image{
            display: flex;
            min-width: 50vw;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        
    </style>
</head>
<body>
    
    <div class = "auth_page">
        <div class="header">
            <img src ="Icons/logo.svg" width="80px" height="80px">
        </div>

        <div class = "welcome"><h1>Welcome back</h1></div>
        <div class = "form">
            <form action="" method = "" name = "">
                <label for="username">Username</label><br>
                <input name = "username" id = "username" type = "text"><br><br>
                <label for="password">Password</label><br>
                <input name = "password" id = "password" type = "password"><br><br>
                <div class="low">
                    <div class = "checkbox_and_label">
                    <input type="checkbox" id = "remember">
                    <label for = "remember">Remember me</label>
            </div>
                <a href="">Forgot Password?</a>
            </div>
                <input type="submit" id = "login" value="Login">
            </form>
        </div>
       
        <footer>
            <p>Don't have an account? <a href=""><strong>Sign up<strong</a></p>
        </footer>

        </div>
    </div>
    <div class = "image">
        <img src="Images/image6.jpg" width="100%" height="100%"  class="side_image">
    </div>
    
</body>
</html>
