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
        #division_one{
            display: flex;
            flex-direction: column;
            gap: 100px;


        }
        #division_two{
            margin-top: -100px;
        }
        #division_two label{
            font-size: x-large;
            font-family: cursive;

        }
        #division_two .box{
            width: 400px;
            height: 30px;
        }
        #division_two #login{
            width: 400px;
            height: 45px;
            background-color: black;
            color: white;
            margin-top: 10px;
            border-radius: 10px;
        }
        #division_three{
            height: 15%;
            width: 100%;
            background-color: lightgray;
        }
        #submit_replyE{
            color: red;
            font-size: 19px;
        } 
        #submit_replyS{
            color: green;
            font-size: 19px;
        }
        #division_one h1{
            font-family:cursive;
        }

    </style>
</head>
<body>
    <!--adding header php file-->
    <?php
        include('header.php');
    ?>
    <div class = "auth_page">
        <!--the sign up form section-->
        <div class="left">
            <div id = "division_one">
                <div class = "icon"><img src ="Icons/logo.svg" width="80px" height="80px"></div>
                <div class="header"><h1>Welcome</h1></div>
            </div>
            <!--The signup form -->
            <div id = "division_two">
                <form action="signup.php" method = "post" id = "signup">
                    <label for="username">Username</label><br>
                    <input name = "username" id = "username" type = "text" class="box" required><br><br>

                    <label for="password">Password</label><br>
                    <input name = "password" id = "password" type = "password" class="box" required><br><br>

                    <label for="repeat">Repeat password</label><br>
                    <input name = "repeat" id = "repeat" type = "password" class="box" required><br><br>

                    <input type="submit" id = "login" value="Register">
                </form>
            </div>
            <!--php form validation-->
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST'){//check if form is submitted
                    // Retrieve form data
                        $submitFlag = true;
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $repeatPassword = $_POST['repeat'];

                    // Validate username
                    if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
                        $message = "Invalid username. Username must contain only alphanumeric characters.<br>";
                    }
                    // validate password
                    else if (strlen($password) < 8 || strlen($password) > 16 || !preg_match('/[a-zA-Z]/', $password) || !preg_match('/[0-9]/', $password)) {
                        $message = "Invalid password. Password must be 8 to 16 characters long and include both letters and numbers.<br>";
                    }
                    // validate password repeat
                    else if ($password !== $repeatPassword) {
                        $message = "Password and repeat password do not match.<br>";            
                    }
                    //check sign up success($message is not set to any error message) and reply to the user
                    if(isset($message)){
                        echo"<div id=\"submit_replyE\">{$message}</div>";
                    }
                    else{
                        //connect to the database
                        $host = "localhost";
                        $user = "root";
                        $pass = "";
                        $db = "uni_mag";

                        $connection = new mysqli($host, $user, $pass, $db) or die("unable to connect");
                        //check for duplicated usernames
            
                            $sqluser = "SELECT username FROM user_information WHERE username = '$username'";
                            $qresult=mysqli_query($connection, $sqluser);
                            $counts=mysqli_num_rows($qresult);

                            if($counts > 0)
                            {
                                echo"<div id=\"submit_replyE\">Username is already taken</div>";
                                echo"<div> </div>";
                            }

                        //Insert data into the database
                            $sql = "INSERT INTO user_information (username, password)
                                    VALUES ('$username', '$password')";
                            //check if insertion was a success 
                            if ($connection->query($sql) === TRUE) {
                                echo"<script type=\"text/javascript\">
                                let form = document.getElementById(\"signup\");
                                form.style.fontSize = \"x-large\";
                                form.style.color = \"green\";
                                form.innerHTML = \"Sign up successful!\";
                                </script>
                                <button id = ><a>Login</a></button>";
                            }
                    }
                } 
            ?>
            <div><!--I have removed the id = "division three" from mahider's draft-->
            </div>
        </div>
        <!--php form data handling -->
     <div class = "right">
            <img src="Images/image6.jpg" width="100%" height="100%"  class="side_image">
        </div>
    </div>
</body>
</html>