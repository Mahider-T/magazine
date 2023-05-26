<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Nanum+Myeongjo&family=Shadows+Into+Light&display=swap');
        *{
            margin: 0;
            padding: 0;
        }
        .auth_page{
            width: 40vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            border-right: 2px solid black;

        }
        .welcome{
            font-family: 'Times New Roman', Times, serif;
            font-size: 40px;
        }
        label{
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;

        }
        body{
            display: flex;
        }
        #username,#password{
            width: 300px;
            height: 25px;
            margin-bottom: 10px;
        }
        #login, button{
            width: 300px;
            height: 40px;
            background-color: black;
            color: white;
            margin-top: 10px;

        }
        .low{
            display: flex;
            width:300px;
            justify-content: space-between;
        }
        .header{
            height: 50px;
            width: 40vw;
            background-color: lightgray;
            margin-bottom: auto;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        .footer{
            height: 50px;
            width: 40vw;
            background-color: lightgray;
            margin-top: auto;
        }

        
    </style>
</head>
<body>
    
    <div class = "auth_page">
        <div class="header">
            <img src ="Icons/logo.svg" width="50px" height="50px">
        </div>

        <div class = "welcome">Welcome back</div>
        <div class = "form">
            <form action="" method = "" name = "">
                <label for="username">Username</label><br>
                <input name = "username" id = "username" type = "text"><br>
                <label for="password">Password</label><br>
                <input name = "password" id = "password" type = "password"><br>
                <input type="submit" id = "login" value="Login">
            </form>
        </div>
        <div class="low">
            <div class = "checkbox_and_label">
                <input type="checkbox" id = "remember">
                <label for = "remember">Remember me</label>
            </div>
            <a href="">Forgot Password?</a>
        </div>
        <button class = "google">Sign in with google</button>
        <div class="footer">

        </div>
    </div>
    <div class = "image">
        <img src="Images/dt.png" width="100%" height="100%">
    </div>
    
</body>
</html>
