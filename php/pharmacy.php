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

<body style="overflow-y: hidden">
    <?php require '../components/nav.html' ?>

    <div id="pContainer">
        <div class="a_head">
            <h2 style="font-weight: 500">AS Pharmacy</h2>
        </div>
        <div class="p_body">
            <div class="p_content">
                <div class="search">
                    <input type="text" placeholder="Search for medicines" id="drug-search" onkeyup="searchFunc()">
                </div>
                <div class="d_info" style="margin: 15px 0;">
                    <!-- <h3 class="info">sinex</h3>
                    <h3 class="info">advil</h3> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
    const searchFunc = () => {
        const drugDisp = document.querySelector('.d_info');
        const drugName = document.getElementById('drug-search').value;
        const url = `https://drug-info-and-price-history.p.rapidapi.com/1/druginfo?drug=${drugName}`;
        const options = {
            method: 'GET',
            headers: {
                'X-RapidAPI-Key': 'd7f440cd9bmshd58d1e4252bf9cbp19de77jsn9484a4202ffe',
                'X-RapidAPI-Host': 'drug-info-and-price-history.p.rapidapi.com'
            }
        };

        fetch(url, options)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                drugDisp.innerHTML = "";
                data.forEach(item => {
                    let drugElement = document.createElement("div");
                    drugElement.classList.add("info");

                    drugElement.innerHTML = `<h3>${item.brand_name}</h3>
                    <p><strong>Generic name:</strong> ${item.generic_name}</p>
                    <p><strong>Labeler:</strong> ${item.labeler_name}</p>
                    <p><strong>Dosage:</strong> ${item.dosage_form}</p>
                    <p><strong>Type:</strong> ${item.product_type}</p>
                    `;
                    drugDisp.appendChild(drugElement);
                })
            })
            .catch(err => {
                console.error(err);
            });
    }
    </script>

</body>

</html>