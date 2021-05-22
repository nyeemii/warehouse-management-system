<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');
    include('server.php');

    $username = $_SESSION['username'];
    if (!isset($_SESSION['username'])) {
        header('location: ../../index.php');
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
        header("location: ../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/branch-billing.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Billing</title>
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Branch-Homepage/branch-homepage.php">Profile</a>
        <a href="../Branch-Gallery/branch-gallery.php">Gallery</a>
        <a href="../Branch-Search/branch-search.php">Search</a>
        <a href="../Branch-Inventory/branch-inventory.php">Inventory</a>
        <a href="../Branch-Incoming-Product/branch-incoming-product.php">Incoming Product</a>
        <a href="./branch-billing.php" style="color: #4B778D">Billing</a>
        <button class="dropdown-btn">Maintenance 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="../Branch-Maintenance/branch-maintenance.php">Edit</a>
            </div>
        <a href="#">Help</a>
        <a href="branch-billing.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="BH-header">Billing</h1>
            <div class="form">
                <form action="branch-billing.php" method="POST">
                    <input type="hidden" name="uname" value=<?php echo $username;?> />
                    <label for="productID">Product ID</label>
                    <input type="text" name="productID" id="productID" placeholder="Enter product ID" required>
                    <input type="submit" name="btn_add" value="Add">
                </form>
            </div>
            <table>
                <thead>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM tbl_billing WHERE username='$username'";
                        $result = $db->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['brandName'];?></td>
                                        <td><?php echo $row['type'];?></td>
                                        <td><?php echo $row['model'];?></td>
                                        <td><?php echo $row['price'];?></td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
            <div class="total-price">
                <div>
                    <h3>Total Amount</h3>
                </div>
                <div class="grid-2">
                    <h3><?php
                        $sql = "SELECT SUM(price) FROM tbl_billing WHERE username='$username'";
                        $result = $db->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $price = $row['SUM(price)'];
                                echo "₱".$price;
                            }
                        }
                    ?></h3>
                </div>
            </div>
            <div class="submit-div">
                <a href="receipt-pdf.php" target="_blank">Print PDF</a>
                <form action="branch-billing.php" method="POST">
                    <input type="hidden" name="uname" value=<?php echo $username;?> />
                    <input class="submit" name="btn-submit" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <script src="./index1.js"></script>
    <script src="../index.js"></script>
</body>

</html>