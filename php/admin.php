<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="container">
        <nav class="sidebar">
            <h1>Admin Dashboard</h1>
            <ul>
                <li><a href="#" class="active">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </nav>

        <main class="content">
            <header>
                <h2>Welcome, Admin!</h2>
                <a href="#" onclick="logout()">Logout</a>
            </header>

            <div class="dashboard-content">
                <h3>Dashboard Overview</h3>
                <p>This is the main content area of your admin dashboard.</p>
            </div>
        </main>
    </div>

    <script>
    function logout() {
        let confirmval = confirm("Are you sure you want to log out?");
        if (confirmval == true) {
            window.location.href = "../php/logout.php";
        }
    }
    </script>
</body>

</html>