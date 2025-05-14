<?php
include '../db.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: ../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script></style>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
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
            height: 950px;
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
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .nav-item:hover,
        .nav-item.active {
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
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            padding: 25px;
            color: white;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }





        .table-container {
            width: 100%;
            overflow-x: auto;
            background-color: white;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #f8f9fa;
            color: #495057;
            text-align: left;
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        .message-cell {
            max-width: 300px;
        }

        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .action-cell {
            text-align: center;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 3px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-view {
            background-color: #2ecc71;
            color: white;
        }

        .btn-reply {
            background-color: #3498db;
            color: white;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
        }



        /* Basic responsiveness */
        @media screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }

            .action-cell .btn {
                padding: 6px 10px;
                display: block;
                margin-bottom: 5px;
            }
        }



        .contact-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #f4f4f4 0%, #e0e0e0 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }

        .contact-card {
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1),
                0 1px 5px rgba(0, 0, 0, 0.03),
                0 4px 8px rgba(0, 0, 0, 0.05);
            width: 50%;
            max-width: 600px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #007bff, #00c6ff);
        }

        .contact-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
            position: relative;
            padding-bottom: 15px;
        }

        .contact-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #007bff, #00c6ff);
            border-radius: 3px;
        }

        .contact-info p {
            font-size: 18px;
            margin: 15px 0;
            color: #555;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .contact-info p i {
            color: #007bff;
            font-size: 20px;
        }

        .contact-message {
            padding: 20px;
            background: #f9f9f9;
            border-radius: 12px;
            font-size: 16px;
            text-align: left;
            max-height: 200px;
            overflow-y: auto;
            margin: 25px 0;
            border-left: 4px solid #007bff;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05);
            line-height: 1.6;
            color: #444;
        }

        .contact-message::-webkit-scrollbar {
            width: 6px;
        }

        .contact-message::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .contact-message::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 10px;
        }

        .contact-message::-webkit-scrollbar-thumb:hover {
            background: #aaa;
        }

        .contact-actions {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn-back {
            display: inline-block;
            padding: 12px 28px;
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-back:hover {
            background: linear-gradient(135deg, #0056b3 0%, #003d80 100%);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
        }

        .btn-back:active {
            transform: translateY(0);
            box-shadow: 0 2px 10px rgba(0, 123, 255, 0.2);
        }

        .btn-back::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .btn-back:hover::before {
            left: 100%;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .contact-card {
                width: 80%;
                padding: 25px;
            }

            .contact-title {
                font-size: 24px;
            }

            .contact-info p {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 480px) {
            .contact-card {
                width: 95%;
                padding: 20px;
            }

            .btn-back {
                padding: 10px 20px;
                font-size: 14px;
            }

            .contact-message {
                padding: 15px;
                font-size: 14px;
            }
        }

        /* Animation for loading effect */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .contact-card {
            animation: fadeIn 0.6s ease-out forwards;
        }
    </style>
</head>

<body>
    <d class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-brand">
                Admin Panel
            </div>
            <div class="profile-section">
                <!-- <img src="../assets/logo.jpg" alt="Admin Profile" class="profile-image"> -->
                <h3>Admin</h3>
            </div>
            <div class="nav-menu">
                <div class="nav-item">
                    <i class="fas fa-home"></i> <a href="./dashboard.php"
                        style="color: white; text-decoration: none;">Dashboard</a>
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
                <h2>Contact Information</h2>
                <p>View and manage your contact list</p>
            </div>

            <div class="contact-container">
                <div class="contact-card">
                    <h3 class="contact-title">Contact Information</h3>
                    <div class="contact-info">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = intval($_GET['id']); // Get the contact ID and sanitize input
                        
                            // Fetch the contact data
                            $query = "SELECT * FROM contactus WHERE id = $id";
                            $result = mysqli_query($conn, $query);
                            if ($result->num_rows > 0) {
                                while ($contact = $result->fetch_assoc()) {
                                    ?>
                                    <p><strong>Name:</strong> <?php echo htmlspecialchars($contact['fullname']); ?></p>
                                    <p><strong>Email:</strong> <?php echo htmlspecialchars($contact['email']); ?></p>
                                    <p><strong>Phone:</strong> <?php echo htmlspecialchars($contact['phone']); ?></p>
                                    <p><strong>Type:</strong> <?php echo htmlspecialchars($contact['type']); ?></p>
                                    <p><strong>Topic:</strong> <?php echo htmlspecialchars($contact['topic']); ?></p>
                                    <a data-fancybox="gallery" href="../<?php echo htmlspecialchars($contact['file']); ?>">
                                        <img width="60px" height="80px" src="../<?php echo htmlspecialchars($contact['file']); ?>">
                                    </a>


                                    <p><strong>Message:</strong></p>
                                    <div class="contact-message"> <?php echo nl2br(htmlspecialchars($contact['message'])); ?> </div>
                                <?php }
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
</body>

</html>