    <?php
    $showAlert  = false;    
    $showError = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "db_connect.php";
        $email = $_POST["em"];
        $password = $_POST["pw"];
        $cpassword = $_POST["cpw"];
        
        $sqlchk = "SELECT * FROM users WHERE email = '$email'";
        $resultchk = mysqli_query($con, $sqlchk);
        $num = mysqli_num_rows($resultchk);
        if($num>0){
            $showError = "Email already exists";
        }else{   
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
        }      
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style3.css">
        <title>Hospital Management System - Signup</title>
    </head>

    <body>
        <?php require '../components/nav-mod.html' ?>

        <div id="message" style="height: 50px; background:#abc9ff">
            <?php
        if($showAlert){
            echo '<div class="alert" style="height:50px;">'.$showAlert.'<a href="login.php"> Login here</a></div>';
        }else if($showError){
            echo '<div class="error" style="height:50px;">'.$showError.'</div>';
        }
        ?>
        </div>
        <div class="main" style="overflow-y:hidden">
            <form id="signup" method="post" action="signup.php">
                <div id="top">
                    <h3 style="font-weight:500">Signup</h3>
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

                    <div class="inp">
                        <label for="pw">Confirm Password:</label> <br>
                        <input type="password" name="cpw" id="cpw">
                    </div>
                    <button type="submit" name="submit" id="submit">Signup</button>
                    <p style="margin-top:10px;font-weight:400;text-align:center" class="inp">
                        Already have an account?
                        <a href="login.php">Login</a>
                    </p>
                </div>
            </form>
        </div>

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