    <?php
    $showAlert  = false;    
    $showError = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "db_connect.php";
        $email = $_POST["em"];
        $password = $_POST["pw"];
        $cpassword = $_POST["cpw"];
 
      
            if(!empty($password) && !empty($email) && $password == $cpassword){
                $sql = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password')";
                $result = mysqli_query($con, $sql);
                $showAlert = "Signed up successfully.";
            }else if(empty($password) || empty($cpassword) || empty($email)){
                $showError = "Please fill out all the fields";
            }else if($password != $cpassword){
                $showError = "Passwords do not match";
            }
        }      
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hospital Management System - Signup</title>
    </head>

    <body>
        <?php require '../components/nav-mod.html' ?>
        <?php
        if($showAlert){
            echo '<div class="alert">'.$showAlert.'<a href="login.php"> Login here</a></div>';
        }else if($showError){
            echo '<div class="error">'.$showError.'</div>';
        }
        ?>

        <div class="main">
            <form id="login" method="post" action="signup.php">
                <div id="head">
                    <h3 style="font-weight:500">Signup</h3>
                </div>

                <div id="body">
                    <div class="inp">
                        <label for="email">Email:</label> <br>
                        <input type="email" name="em" id="em">
                    </div>

                    <div class="inp">
                        <label for="pw">Password:</label> <br>
                        <input type="password" name="pw" id="pw">
                    </div>

                    <div class="inp">
                        <label for="pw">Confirm Password:</label> <br>
                        <input type="password" name="cpw" id="cpw">
                    </div>
                    <button type="submit" name="submit" id="submit">Signup</button>
                </div>
            </form>
        </div>

        <style>
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #abc9ff;
            height: 45rem;
        }

        #head {
            text-align: center;
            font-weight: 500;
        }

        #login {
            width: 21rem;
            height: 25.5rem;
            background: white;
            border-radius: 10px;
            padding: 15px 0;
        }

        #body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 5px 0;
        }

        .inp {
            width: 65%;
            padding: 10px 0;
        }

        #body button {
            width: 5rem;
            height: 2rem;
            border-radius: 10px;
            border: none;
            margin-top: 20px;
        }

        #body button:hover {
            background-color: #e15f97;
            color: white;
            transition: all 0.25s ease;
            cursor: pointer;
        }

        #body input {
            border-radius: 10px;
            border: 1px solid grey;
            height: 2rem;
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            font-size: 13px;
        }

        .alert {
            height: 3.5rem;
            background: #D8FFAE;
            color: black;
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .error {
            height: 3.5rem;
            background: #FFF3A2;
            color: black;
            display: flex;
            align-items: center;
            padding: 10px;
        }
        </style>


        <script>
        const alert = document.querySelector(".alert");
        const error = document.querySelector(".error");
        setTimeout(() => {
            // alert.style.display = "none";
            error.style.display = "none";
        }, 3000);
        </script>

        <body>

    </html>