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

    <div id="docContainer">
        <div class="a_head">
            <h2 style="font-weight: 500">Our Doctors</h2>
        </div>
        <div class="a_body">
            <div class="docList">
                <div class="doc" id="doc">
                    <div class="docImg" id="image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeLJnzgcw-0NEcuH0joPa1I_-MCWg-yJ_v1FrDzT8&s"
                            alt="" />
                    </div>
                    <div class="docInfo">
                        <h3 id="name">Dr. Aman Shahi</h3>
                        <p id="degree">MBBS, MD</p>
                        <p id="speciality">Cardiologist</p>
                        <p id="experience">10 years of experience</p>
                        <p id="availability">9:00 AM to 5:00 PM (Tue,Thu)</p>
                    </div>
                    <div class="book"><button>Book Appointment</button></div>
                </div>

                <div class="doc">
                    <div class="docImg" id="image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeLJnzgcw-0NEcuH0joPa1I_-MCWg-yJ_v1FrDzT8&s"
                            alt="" />
                    </div>
                    <div class="docInfo">
                        <h3 id="name">Dr. Aman Shahi</h3>
                        <p id="degree">MBBS, MD</p>
                        <p id="speciality">Cardiologist</p>
                        <p id="experience">10 years of experience</p>
                        <p id="availability">9:00 AM to 5:00 PM (Tue,Thu)</p>
                    </div>
                    <div class="book"><button>Book Appointment</button></div>
                </div>
            </div>
        </div>
    </div>

    <script>
    let bookBtn = document.querySelectorAll("#docContainer .doc .book");

    bookBtn.forEach((b) => {
        b.addEventListener("click", () => {
            window.location.href = "../php/appointment.php";
        });
    });
    </script>
</body>

</html>