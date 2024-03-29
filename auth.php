
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
        @font-face {
            font-family: "custom font";
            src: url("fonts/Roboto-Light.ttf");
        }
        .auth_page{
            width: 50%;
            height: 100%;
            float: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* gap: 2rem; */
            padding-right: 5%;
            padding-left: 5%;
            flex-shrink: 1;
            min-width: fit-content;

        }
        .welcome{
            font-family: 'Times New Roman', Times, serif;
            font-family: 'Great Vibes', cursive;
            margin-bottom: 30px;
            font-size: 35px;
        }
        label{
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;

        }
        body{
            display: flex;
        }
        #username,#password{
            width: 350px;
            height: 30px;
            margin-bottom: 10px;
            font-family: "custom font";
            font-weight: 600;
            font-size: 16px;
            padding-left: 15px;
        }
        #login, button{
            width: 350px;
            height: 45px;
            background-color: black;
            color: white;
            margin-top: 10px;
            border-radius: 10px;

        }
        .low{
            display: flex;
            width:350px;
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
        /*css added by Sifen*/
        #submit_reply{
            color: red;
            font-size: 19px;
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
            <form action="auth.php" method = "post" name = "">
                <label for="username">Username</label><br>
                <input name = "username" id = "username" type = "text" required><br><br>
                <label for="password">Password</label><br>
                <input name = "password" id = "password" type = "password" required><br><br>
                <!--php code to handle the form submission-->
                <?php
                    
                    session_start();
                    if ($_SERVER['REQUEST_METHOD'] === 'POST'){//check if form is submitted
                        // Retrieve form data
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                        
                        //connect to the database
                            $host = "localhost";
                            $user = "root";
                            $pass = "";
                            $db = "uni_mag";

                            $connection = new mysqli($host, $user, $pass, $db) or die("unable to connect");
                    
                        //check if record exists as an author and retrieve the name for blogging, editing...                         
                            $sqlauthor = "SELECT name FROM author_information WHERE username = '$username' AND password = '$password'";
                            $qresult1=mysqli_query($connection, $sqlauthor);
                            $count1=mysqli_num_rows($qresult1);
                        
                            if($count1 > 0)
                            {
                                foreach($qresult1 as $q1){
                                    $_SESSION['Name'] = $q1['name'];
                                }                           
                                $_SESSION["adminFlag"] = true;
                                header("location: index.php");
                            }
                            else{
                            //check if record exists as a user    
                                $sqluser = "SELECT * FROM user_information WHERE username = '$username' AND password = '$password'";
                                $qresult=mysqli_query($connection, $sqluser);
                                $count=mysqli_num_rows($qresult);

                                if($count > 0)
                                {   
                                    foreach($qresult as $q){
                                        $_SESSION['Name'] = $q['name'];
                                    }     
                                    $_SESSION["adminFlag"] = false;
                                    header("location: index.php");
                                }
                                else{
                                    echo"<div id=\"submit_reply\">Record not found, please try again.</div>";
                                }
                            }
                    }
                ?>
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
            <p>Don't have an account? <a href="signup.php"><strong>Sign up<strong</a></p>
        </footer>

        </div>
    </div>
    <div class = "image">
        <img src="Images/image6.jpg" width="100%" height="100%"  class="side_image">
    </div>
    
</body>
</html>
