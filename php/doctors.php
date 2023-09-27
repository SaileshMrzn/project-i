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
                <div class="docInfo">
                    <span class="docImage"></span>
                </div>
            </div>
        </div>
    </div>
    <script>
    let docInfoContainer = document.querySelector(".docInfo");
    fetch("../doc-list.json")
        .then(response => response.json())
        .then(data => {
            data.forEach(item => {
                let itemElement = document.createElement("div");
                let imageElement = document.createElement("div");
                itemElement.classList.add("doc");
                imageElement.classList.add("docImg");

                imageElement.innerHTML = `
                                <img src="${item.url}" alt="Doctor Image" style="height:150px; width:150px;">
                `;

                itemElement.innerHTML = `
                            <div class="the_doctors">
                            <h3 id="name">${item.name}</h3>
                            <p id="degree">${item.qualification}</p>
                            <p id="speciality">${item.specialization}</p>
                            <p id="experience">${item.experience} of experience</p>
                            <p id="availability">${item.availability}</p>
                            <div class="book"><button>Book Appointment</button></div>
                            </div>
                `;

                docInfoContainer.appendChild(itemElement);
                itemElement.appendChild(imageElement);

                let bookBtn = document.querySelectorAll(".book");
                bookBtn.forEach((b) => {
                    b.addEventListener("click", () => {
                        window.location.href = "../php/appointment.php";
                    });
                });
            });
        })
        .catch(error => {
            console.error("Error fetching JSON data:", error);
        });
    </script>
</body>

</html>