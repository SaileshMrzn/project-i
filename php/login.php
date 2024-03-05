<?php
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include "db_connect.php";
  $email = $_POST["em"];
  $password = $_POST["pw"];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    session_start();
if ($row && isset($row['user_type'])) {
    if ($row['user_type'] == "user") {
        $_SESSION['user_loggedin'] = true;
        header("location: index.php");
        exit();
    } else if ($row['user_type'] == "admin") {
        $_SESSION['admin_loggedin'] = true;
        header("location: admin.php");
        exit();
    } else {
        $showError = "Invalid Credentials";
    }
} else {
    $showError = "Invalid Credentials"; 
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style3.css">
    <title>Hospital Management System - Login</title>
</head>

<body>
    <?php require '../components/nav-mod.html' ?>

    <div id="message" style="height: 50px; background:#abc9ff">
        <?php
            if($showError){
            echo
                '<div class="error">'.$showError.'</div>';
            }
        ?>
    </div>

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