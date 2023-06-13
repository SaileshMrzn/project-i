<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <title>Hospital Management System</title>
</head>

<body style="overflow-y: scroll">
    <?php require '../components/nav.html' ?>

    <div class="appointmentContainer">
        <div class="a_head">
            <h2 style="font-weight: 500">Appointment Management</h2>
        </div>
        <div class="a_body">
            <form action="" id="form1">
                <h3 style="font-weight: 500; border-bottom: 1px solid black">
                    Patient Information
                </h3>
                <br />

                <div>
                    <label for="firstName lastName" class="labelFix">Name</label>
                    <br />
                    <input type="text" id="firstName" placeholder="First Name" />
                </div>
                <div>
                    <label for="lastName"><br /></label>
                    <input type="text" id="lastName" placeholder="Last Name" />
                </div>

                <div id="pGen">
                    <label for="gender">Gender</label><br />
                    <select name="gender" id="gender" class="gen">
                        <option value="Male">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div id="pPhone">
                    <label for="phone" class="ph-label">Phone</label><br />
                    <input type="tel" id="phone" class="ph" placeholder="#### ### ###" /><br />
                </div>

                <div id="pDob">
                    <label for="dob">Date of Birth</label><br />
                    <input type="date" id="dob" />
                </div>
                <br />

                <div>
                    <label for="" id="addressLabel" class="labelFix">Address</label><br />
                    <input type="text" id="country" placeholder="Country" />
                </div>
                <div>
                    <label for=""><br /></label>
                    <input type="text" id="region" placeholder="State" />
                </div>
                <input type="text" id="city" placeholder="City" />
                <input type="text" id="postal" placeholder="Postal code" />
                <input type="text" id="fullAdd" placeholder="Full Address" style="width: 95%" />

                <div id="pEmail">
                    <label for="email">Email</label><br />
                    <input type="email" id="email" style="width: 95%" />
                </div>

                <h3 style="font-weight: 500; border-bottom: 1px solid black">
                    Appointment Information
                </h3>

                <div id="appDate">
                    <label for="date">Appointment Date</label>
                    <input type="date" id="date" />
                </div>

                <div id="appTime">
                    <label for="time">Appointment Time</label>
                    <input type="time" id="time" />
                </div>

                <div id="appType">
                    <label for="type">Appointment type</label>
                    <select name="gender" id="type" style="width: 95%">
                        <option value="Male">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>