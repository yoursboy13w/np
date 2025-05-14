<?php
include '../db.php';

if (!isset($_SESSION['admin_id'])) {
    header('location: ./login.php');
}

$total_users = 1250;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #f4f6f9;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: #2c3e50;
            color: white;
            padding: 20px;
            position: fixed;
            height: 100vh;
        }

        .sidebar-brand {
            font-size: 24px;
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #34495e;
        }

        .profile-section {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #34495e;
        }

        .profile-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .nav-menu {
            margin-top: 20px;
        }

        .nav-item {
            padding: 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .nav-item:hover {
            background: #34495e;
        }

        .nav-item i {
            margin-right: 10px;
        }

        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .stat-card h3 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .stat-card .number {
            font-size: 24px;
            font-weight: bold;
            color: #3498db;
        }


        .p2 {
            padding: 1.2rem;
        }

        .nav-item a {

            color: white;
            text-decoration: none;
        }

        /* Large Devices (Desktop) */
        @media screen and (min-width: 1200px) {
            .sidebar {
                width: 250px;
                height: 915px;
            }

            .main-content {
                margin-left: 250px;
            }
        }

        /* Medium Devices (Laptops/Tablets in landscape) */
        @media screen and (max-width: 1199px) {
            .sidebar {
                width: 220px;
                height: 915px;
            }

            .main-content {
                margin-left: 220px;
            }

            .profile-image {
                width: 70px;
                height: 70px;
            }
        }

        /* Tablets and Small Laptops */
        @media screen and (max-width: 992px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 200px;
            }

            .stat-card {
                padding: 15px;
            }
        }

        /* Tablets and Large Phones */
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 10px;
            }

            .sidebar-brand {
                padding: 10px 0;
                font-size: 20px;
            }

            .profile-section {
                padding: 10px 0;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
            }

            .profile-image {
                width: 50px;
                height: 50px;
                margin-bottom: 0;
            }

            .nav-menu {
                display: flex;
                justify-content: center;
                gap: 10px;
                margin-top: 10px;
                flex-wrap: wrap;
            }

            .nav-item {
                padding: 10px 15px;
                background: #34495e;
                border-radius: 5px;
            }

            .main-content {
                margin-left: 0;
                padding: 15px;
            }
        }

        /* Small Phones */
        @media screen and (max-width: 480px) {
            .sidebar {
                padding: 5px;
            }

            .sidebar-brand {
                font-size: 18px;
            }

            .profile-section {
                flex-direction: column;
            }

            .nav-menu {
                flex-direction: column;
                align-items: stretch;
            }

            .nav-item {
                text-align: center;
                margin: 5px 0;
            }

            .main-content {
                padding: 10px;
            }

            .header {
                padding: 15px;
            }

            .header h2 {
                font-size: 20px;
            }

            .stat-card {
                padding: 12px;
            }

            .stat-card h3 {
                font-size: 16px;
            }

            .stat-card .number {
                font-size: 18px;
            }
        }

        /* Very Small Phones */
        @media screen and (max-width: 320px) {
            .sidebar-brand {
                font-size: 16px;
            }

            .profile-image {
                width: 40px;
                height: 40px;
            }

            .nav-item {
                padding: 8px 12px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-brand">
                Admin Panel
            </div>
            <div class="profile-section">
                <img src="../assets/logo.jpg" alt="Admin Profile" class="profile-image">

                <h3></h3>
            </div>
            <div class="nav-menu">
                <div class="nav-item active">
                    <i class="fas fa-home"></i> <a href="./dashboard.php">Dashboard</a>
                </div>
                <div class="nav-item active">
                    <i class="fas fa-envelope"></i> <a href="./contacts.php"
                        style="color: white; text-decoration: none;">Contact Us</a>
                </div>
                <!-- <div class="nav-item">
                    <i class="fas fa-calendar-check"></i> <a href="./booknow.php"
                        style="color: white; text-decoration: none;">Book-Now</a>
                </div> -->

                <div class="nav-item">
                    <i class="fas fa-sign-out-alt"></i><a href="../logout.php"
                        style="color: white; text-decoration: none;">Logout</a>
                </div>

            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h2 style="color: red;">Welcome back, Admin!</h2>
            </div>

            <div class="stat-card">
                <h3>Total Bookings</h3>
                <div class="number">
                    <?php
                    // Query to count users
                    
                    $sql = "SELECT COUNT(*) AS total_users FROM contactus"; // Change 'users' to your table name
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["total_users"];
                    } else {
                        echo "No bookings found";
                    }

                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function () {
                if (this.textContent.includes('Logout')) {
                    window.location.href = 'logout.php';
                    return;
                }
                document.querySelector('.nav-item.active').classList.remove('active');
                this.classList.add('active');
            });
        });
    </script>
</body>

</html>