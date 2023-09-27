    <?php
    $showAlert  = false;    
    $showError = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "db_connect.php";
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $gender = $_POST["gender"];
        $phone = $_POST["phone"];
        $dob = $_POST["dob"];

        $city = $_POST["city"];
        $country = $_POST["country"];
        $address = $city . ', ' . $country;

        $email = $_POST["email"];
        $appDate = $_POST["adate"];
        $appTime = $_POST["atime"];
        $doc = $_POST["docs"];
        $appType = $_POST["atype"];
        $medHis = $_POST["med-history"];
        
        $sqlchk = "SELECT * FROM users WHERE email = '$email'";
        $resultchk = mysqli_query($con, $sqlchk);
        $num = mysqli_num_rows($resultchk);
        if($num>0){
            $showError = "Email already exists";
        }else{
                $sql = "insert into `appointment-info` (`FirstName`, `LastName`, `Gender`, `Phone`, `DOB`, `Address`, `Email`, `Appointment-Date`, `Appointment-Time`, `Doctor`, `Appointment-Type`, `Medical-History`) VALUES ('$firstName', '$lastName', '$gender', '$phone', '$dob', '$address', '$email', '$appDate', '$appTime', '$doc', '$appType', '$medHis')";
                $result = mysqli_query($con, $sql);
                $showAlert = "Appointment booked.";
            }
        }   
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style2.css" />
        <link rel="stylesheet" href="../css/style3.css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet" />
        <title>Hospital Management System</title>
    </head>

    <body style="overflow-y: scroll">
        <?php require '../components/nav.html' ?>

        <div id="message" style="height: 50px; background:#abc9ff">
            <?php
        if($showAlert){
            echo '<div class="alert" style="height:50px;">'.$showAlert.'</div>';
        }else if($showError){
            echo '<div class="error" style="height:50px;">'.$showError.'</div>';
        }
        ?>

        </div>

        <div class="appointmentContainer">
            <div class="a_head">
                <h2 style="font-weight: 500">Appointment Management</h2>
            </div>
            <div class="a_body">
                <form action="appointment.php" id="form1" method="post">
                    <h3 style="font-weight: 500; border-bottom: 1px solid black">
                        Patient Information
                    </h3>
                    <br />

                    <div>
                        <label for="firstName lastName" class="labelFix">Name</label>
                        <br />
                        <input type="text" id="firstName" name="firstName" placeholder="First Name" required />
                    </div>
                    <div>
                        <label for="lastName"><br /></label>
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name" required />
                    </div>

                    <div id="pGen">
                        <label for="gender">Gender</label><br />
                        <select name="gender" id="gender" class="gen" required>
                            <option value="Male">Select gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div id="pPhone">
                        <label for="phone" class="ph-label">Phone</label><br />
                        <input type="tel" id="phone" name="phone" class="ph" placeholder="#### ### ###" /><br />
                    </div>

                    <div id="pDob">
                        <label for="dob">Date of Birth</label><br />
                        <input type="date" id="dob" name="dob" required />
                    </div>
                    <br />

                    <div>
                        <label for="" id="addressLabel" class="labelFix">Address</label><br />
                        <input type="text" id="country" name="country" placeholder="Country" required />
                    </div>
                    <div>
                        <label for=""><br /></label>
                        <input type="text" id="region" placeholder="State" />
                    </div>
                    <input type="text" id="city" name="city" placeholder="City" required />
                    <input type="text" id="postal" placeholder="Postal code" />
                    <input type="text" id="fullAdd" placeholder="Full Address" style="width: 95%" />

                    <div id="pEmail">
                        <label for="email">Email</label><br />
                        <input type="email" id="email" name="email" style="width: 95%" required />
                    </div>

                    <h3 style="font-weight: 500; border-bottom: 1px solid black">
                        Appointment Information
                    </h3>

                    <div id="appDate">
                        <label for="adate">Appointment Date</label>
                        <input type="date" id="adate" name="adate" />
                    </div>

                    <div id="appTime">
                        <label for="atime">Appointment Time</label>
                        <input type="time" id="atime" name="atime" />
                    </div>

                    <div id="doc-list">
                        <label for="docs">Doctor:</label>
                        <select name="docs" id="docs">
                            <option value="Male">Select doctor</option>
                            <option value="Male">Dr. Aman Shahi</option>
                            <option value="Female">Dr. Aman Shahi</option>
                        </select>
                    </div>

                    <div id="appType">
                        <label for="atype">Appointment type</label>
                        <select name="atype" id="atype">
                            <option value="Male">Select appointment</option>
                            <option value="New">New appointment</option>
                            <option value="Old">Old appointment</option>
                        </select>
                    </div>

                    <div id="history">
                        <label for="med-history">Medical history (if any)</label>
                        <input type="text" style="width: 95%;" name="med-history" id="med-history">
                    </div>

                    <div id="book">
                        <button id="book-btn">Book Appointment</button>
                    </div>

                </form>
            </div>
        </div>
        <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        const alert = document.querySelector(".alert");
        const error = document.querySelector(".error");
        setTimeout(() => {
            alert.style.display = "none";
            error.style.display = "none";
        }, 3000);
        </script>
    </body>

    </html>