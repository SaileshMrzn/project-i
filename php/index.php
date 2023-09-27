<?php
session_start();

if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){
    $login=true;
}else{
  header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <title>Hospital Management System</title>
</head>

<body>
    <nav class="navbar">
        <div class="container flex">
            <div class="left">
                <a href=""><img src="../images/final.png" alt="" srcset="" /></a>
            </div>

            <div class="right">
                <ul class="flex">
                    <li id="home">Home</li>
                    <li id="services">
                        Services
                        <div class="dropdown">
                            <a href="../php/appointment.php">Appoinment Management</a>
                            <a href="../php/doctors.php">Doctors</a>
                            <a href="">Medical Records</a>
                            <a href="">Pharmacy</a>
                        </div>
                    </li>
                    <li id="about" data-open="#aboutContent">About</li>
                    <li id="support" data-open="#supportContent">Support</li>
                    <li id="contact" data-open="#contactContent">Contact</li>
                </ul>
            </div>
        </div>

        <div id="theSwitch">
            <div class="switchContainer">
                <input type="checkbox" class="checkbox" id="checkbox" />
                <label class="switch" for="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
            <p class="component-title">Logged Out</p>
        </div>
    </nav>

    <div id="pop1">
        <div id="aboutContent" class="pop">
            <h2 style="
            text-align: center;
            font-weight: 500;
            margin-bottom: 5px;
            border-bottom: 1px solid black;
          ">
                About AS Care
            </h2>
            <div class="aboutInsideContent">
                <i class="fa-regular fa-circle-xmark fa-lg closeBtn" data-close></i>
                <p>Created On: 1st May - 18th May <br /></p>
                <p>
                    Team Members: <br />
                    <a href="">Aman Shahi</a>,
                    <a href="">Sailesh Maharjan</a>
                </p>
            </div>
        </div>
        <div id="overlay" class="pop"></div>
    </div>

    <div id="pop2">
        <div id="supportContent" class="pop">
            <h2 style="
            font-weight: 500;
            margin-bottom: 5px;
            border-bottom: 1px solid black;
          ">
                Support Center
            </h2>
            <i class="fa-regular fa-circle-xmark fa-lg closeBtn" data-close></i>
            <div class="supportInsideContent">
                <img id="supportImg" src="../images/support_100.jpg" alt="" />
                <p>
                    Leave us your queries below <br />
                    <a
                        href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSDZBLBjtWkJvVdGNnTxWNvVsjHWWNmfvFDRvZbCgdKJvhRBXcdZBCsJRHbzjthqpMQlQnvW">shailesh.mrzn@gmail.com</a><br />
                    Or call us at <br />
                    <a href="" style="text-decoration: none">+977-9840510225</a>
                </p>
                <p>We will be happy to help you.</p>
            </div>
        </div>
        <div id="overlay" class="pop"></div>
    </div>

    <div id="pop3">
        <div id="contactContent" class="pop">
            <h2 style="
            font-weight: 500;
            margin-bottom: 5px;
            border-bottom: 1px solid black;
          ">
                Contact
            </h2>
            <i class="fa-regular fa-circle-xmark fa-lg closeBtn" data-close></i>
            <div class="contactInsideContent">
                <p>
                    <i class="fa fa-location-dot"></i>

                    Address: <br />
                    Kirtipur-05, Kathmandu, Nepal <br />
                </p>
                <p>
                    <i class="fa fa-phone"></i>
                    Phone: <br />
                    +977-9840510225 <br />
                    +977-9840510225 <br />
                    +977-9840510225 <br />
                </p>
                <p>
                    <i class="fa fa-envelope"></i>
                    Email: <br />
                    <a href="">shailesh.mrzn@gmail.com</a> <br />
                    <a href="">shailesh.mrzn@gmail.com</a> <br />
                    <a href="">shailesh.mrzn@gmail.com</a> <br />
                </p>
                <div class="connect">
                    Connect with us:<br />
                    <a href=""><i class="fa-brands fa-facebook fa-lg" style="padding: 2px 5px; color: black"></i></a>
                    <a href=""><i class="fa-brands fa-twitter fa-lg" style="padding: 2px 5px; color: black"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin fa-lg" style="padding: 2px 5px; color: black"></i></a>
                </div>
            </div>
        </div>
        <div id="overlay" class="pop"></div>
    </div>

    <div class="container2">
        <div class="content1 border">
            <div class="hospitalImage">
                <img src="../images/hosp.jpg" alt="" srcset="" style="height: 400px" />
            </div>
            <div class="slogan border">
                <div class="text">
                    Elevate your healthcare experience with our hospital management
                    system
                </div>
                <div class="btn"><button type="submit">Get Started</button></div>
            </div>
        </div>
    </div>

    <div class="container3 border">
        <h2 class="intro" style="font-weight: 500">Introduction</h2>
        <p class="border">
            Our hospital management system, AS Care is a web-based application that
            helps in facilitating the functioning of hospitals and providing basic
            medical services. Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Asperiores, exercitationem natus? Officiis eligendi facilis nulla,
            reprehenderit dolore fugit quibusdam alias id culpa officia. Harum sed
            impedit optio architecto in vitae molestiae tempore quod dicta nesciunt
            aliquam esse sunt, cumque corporis vel pariatur deserunt neque hic et
            consequuntur reprehenderit. Pariatur, officiis!
        </p>
    </div>

    <div class="container4 border">

        <a href="../php/appointment.php" style="text-decoration: none; color: black">
            <div class="minicontainer border">
                <i class="fa-solid fa-calendar-check fa-2xl"></i>
                <h3 style="font-weight: 500">Appoinment Management</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo
                    at vitae suscipit consectetur voluptatum!
                </p>
            </div>
        </a>

        <a href="../php/doctors.php" style="text-decoration: none; color: black">
            <div class="minicontainer border">
                <i class="fa-solid fa-user-doctor fa-2xl"></i>
                <h3 style="font-weight: 500">Doctors</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                    repellat quae maxime saepe repellendus soluta ducimus necessitatibus
                    asperiores sit esse?
                </p>
            </div>
        </a>

        <a href="appointment.html" style="text-decoration: none; color: black">
            <div class="minicontainer border">
                <i class="fa-solid fa-file-medical fa-2xl"></i>
                <h3 style="font-weight: 500">Medical Records</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                    repellat quae maxime saepe repellendus soluta ducimus necessitatibus
                    asperiores sit esse?
                </p>
            </div>
        </a>

        <a href="../php/pharmacy.php" style="text-decoration: none; color: black">
            <div class="minicontainer border">
                <i class="fa-solid fa-pills fa-2xl"></i>
                <h3 style="font-weight: 500">Pharmacy</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo
                    at vitae suscipit consectetur voluptatum!
                </p>
            </div>
        </a>

        <div class="minicontainer border">
            <i class="fa-regular fa-calendar-check fa-2xl"></i>
            <h3 style="font-weight: 500">Appoinment Management</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                repellat quae maxime saepe repellendus soluta ducimus necessitatibus
                asperiores sit esse?
            </p>
        </div>

        <div class="minicontainer border">
            <i class="fa-regular fa-calendar-check fa-2xl"></i>
            <h3 style="font-weight: 500">Appoinment Management</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                repellat quae maxime saepe repellendus soluta ducimus necessitatibus
                asperiores sit esse?
            </p>
        </div>

    </div>

    <?php
    if($login){
        echo'
        <script>
        document.querySelector(".checkbox").checked = true;
        document.querySelector(".component-title").innerHTML = "Logged In";

        document.querySelector(".checkbox").addEventListener("click", () => {
        let confirmval = confirm("Are you sure you want to log out?");
        if (confirmval == true) {
            window.location.href = "../php/logout.php";
        } else {
            document.querySelector(".checkbox").checked = true;
        }
        });
        </script>';
    }

    ?>

    </script>
    <script src="../js/script.js"></script>
    <script src="https://kit.fontawesome.com/e87b42cfc1.js" crossorigin="anonymous"></script>
</body>

</html>