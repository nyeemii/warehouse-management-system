<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    $username = $_SESSION['username'];
    if (!isset($_SESSION['username'])) {
        header('location: ../index.php');
    }
    if (isset($_GET['logout'])) {
        date_default_timezone_set('Asia/Manila');
        $time = date("h:i a");
        $date = date("M j, Y");

        $query = "UPDATE tbl_audit_trail SET timeout = '$time', date = '$date' 
        WHERE username='$username' AND timeout IS NULL";
        mysqli_query($db, $query);
        session_destroy();
        unset($_SESSION['username']);
        header("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/admin-sales-report.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Dropdown-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Search Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Sales Report</title>
</head>
<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Admin-Homepage/admin-homepage.php">Admin Homepage</a>
        <a href="../Product-registration/product-registration.php">Product Registration</a>
        <a href="../Admin-profile/admin-profile.php">Profile</a>
        <a href="../Admin-Gallery/admin-gallery.php">Gallery</a>
        <a href="../Admin-Inventory/admin-inventory.php">Inventory</a>
        <a href="../Admin-Sales-and-Purchase/sales-and-purchase.php">Sales and Purchase</a>
        <a href="../Admin-Search/admin-search.php">Search</a>
        <button class="dropdown-btn">Product Monitoring 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Incoming-Product/incoming-product.php">Incoming Product</a>
            <a href="../Admin-Outgoing-Product/outgoing-product.php">Outgoing Product</a>
            <a href="../Admin-Stock-Replenishment/stock-replenishment.php">Stock Replenishment</a>
        </div>
        <a href="../Admin-Daily-Attendance/daily-attendance.php">Daily Attendance</a>
        <button class="dropdown-btn" style="color: #4B778D">Report 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="./Admin-audit-trail.php">Audit Trail</a>
            <a href="./Admin-Sales-report.php" style="color: #51c4d3">Sales Report</a>
            <a href="./Admin-Purchase-Report.php">Purchase Report</a>
            <a href="Admin-Incoming-products-report.php">Incoming Products Report</a>
            <a href="Admin-Outgoing-products-report.php">Outgoing Products Report</a>
            <a href="Admin-Stock-replenishment-report.php">Stock Replenishment Report</a>
            <a href="Admin-Attendance-report.php">Attendance Report</a>
            <a href="Admin-Billing-report.php">Billing Report</a>
        </div>
        <button class="dropdown-btn">Maintenance 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Maintenance/admin-edit.php">Edit</a>
            <a href="../Admin-Maintenance/admin-backup-restore.php">Backup & Restore</a>
        </div>
        <a href="#">Help</a>
        <a href="Admin-Sales-report.php?logout=<?php echo "$username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="sales-report-header">Sales Report</h1>
            <div class="print-btn-div">
                <a href="sales-report-pdf.php" target="_blank" class="print-btn">Print PDF</a>
            </div>
            <table>
                <thead>
                    <th>Type of Transaction</th>
                    <th>Date</th>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Store</th>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM tbl_sales_and_purchase WHERE typeOfTransaction='Sales'";
                        $result = $db->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['typeOfTransaction'];?></td>
                                        <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['brandName'];?></td>
                                        <td><?php echo $row['type'];?></td>
                                        <td><?php echo $row['price'];?></td>
                                        <td><?php echo "₱".$row['store'];?></td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../index.js"></script>
</body>
</html>