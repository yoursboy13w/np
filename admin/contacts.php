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



            <form method="POST" action="">

                <?php
                $sql = "SELECT * FROM contactus";
                $result = $conn->query($sql);

                ?>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Topic</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) { ?>

                                        <td><?php echo $row['fullname'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['type'] ?></td>
                                        <td><?php echo $row['topic'] ?>
                                        </td>


                                        <td class="message-cell">
                                            <div class="truncate"><?php echo $row['message'] ?></div>
                                        </td>

                                        <td class="action-cell">
                                            <a href="./contactdetails.php?id=<?php echo $row['id']; ?>"
                                                class="btn btn-view">View</a>
                                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-delete"
                                                onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php }
                                } ?>
                        </tbody>
                    </table>
                </div>
            </form>


        </div>
    </div>
</body>

</html>