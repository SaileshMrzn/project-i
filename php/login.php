<?php
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include "db_connect.php";
  $email = $_POST["em"];
  $password = $_POST["pw"];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    // echo $num;

    if($num>0){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("location: index.php");
    }
    else{
        $showError="Invalid Credentials";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System - Login</title>
</head>

<body>
    <?php 
    require '../components/nav-mod.html';
    if($showError){
    echo
        '<div class="error">'.$showError.'</div>';
    }
    ?>
    <div class="main">
        <form id="login" action="login.php" method="post">
            <div id="top">
                <h3 style="font-weight:500">Login</h3>
            </div>

            <div id="bod">
                <div class="inp">
                    <label for="email">Email:</label> <br>
                    <input type="email" name="em" id="em">
                </div>

                <div class="inp">
                    <label for="pw">Password:</label> <br>
                    <input type="password" name="pw" id="pw">
                </div>

                <button type="submit" name="submit" id="submit">Login</button>

                <p style="margin-top: 10px;font-weight:400;text-align:center" class="inp">Don't have an account? <br><a
                        href="signup.php">Sign
                        Up</a></p>
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

    #top {
        text-align: center;
        font-weight: 500;
    }

    #login {
        width: 21rem;
        height: 23.5rem;
        background: white;
        border-radius: 10px;
        padding: 15px 0;
    }

    #bod {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 10px 0;
    }

    .inp {
        width: 65%;
        padding: 10px 0;
    }

    #bod button {
        width: 5rem;
        height: 2rem;
        border-radius: 10px;
        border: none;
        margin-top: 10px;
    }

    #bod button:hover {
        background-color: #e15f97;
        color: white;
        transition: all 0.25s ease;
        cursor: pointer;
    }

    #bod input {
        border-radius: 10px;
        border: 1px solid grey;
        height: 2rem;
        width: 100%;
        margin-top: 10px;
        padding: 10px;
        font-size: 13px;
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
    // const alert = document.querySelector(".alert");
    const error = document.querySelector(".error");
    setTimeout(() => {
        // alert.style.display = "none";
        error.style.display = "none";
    }, 3000);
    </script>
</body>

</html>