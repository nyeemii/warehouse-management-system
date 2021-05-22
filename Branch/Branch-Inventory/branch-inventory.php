<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

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
    <link rel="stylesheet" href="../CSS/branch-inventory.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Branch Inventory</title>
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Branch-Homepage/branch-homepage.php">Profile</a>
        <a href="../Branch-Gallery/branch-gallery.php">Gallery</a>
        <a href="../Branch-Search/branch-search.php">Search</a>
        <a href="./branch-inventory.php" style="color: #4B778D">Inventory</a>
        <a href="../Branch-Incoming-Product/branch-incoming-product.php">Incoming Product</a>
        <a href="../Branch-Billing/branch-billing.php">Billing</a>
        <button class="dropdown-btn">Maintenance 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="../Branch-Maintenance/branch-maintenance.php">Edit</a>
            </div>
        <a href="../Branch-Maintenance/branch-maintenance.php">Help</a>
        <a href="branch-inventory.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="inv-header">Inventory</h1>
            <div class="search-form">
                <form action="branch-inventory.php" method="post">
                    <label for="search">Search</label>
                    <input type="text" name="search" id="search" placeholder="Search product" required>
                    <input type="submit" name="btn_search" value="Search">
                </form>
            </div>
            <table>
                <thead>
                    <th>Product ID</th>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </thead>
                <tbody>
                    <a class="refresh" href="branch-inventory.php">Refresh</a>
                    <?php
                        if (isset($_POST['btn_search'])) {
                            $search = mysqli_real_escape_string($db, $_POST['search']);

                            $sql = "SELECT * FROM tbl_user WHERE username='$username'";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    date_default_timezone_set('Asia/Manila');
                                    $time = date("h:i a");
                                    $date = date("M j, Y");
                                    $uName = $row['username'];
                                    $firstname = $row['firstname'];
                                    $lastname = $row['lastname'];
                                    $middlename = $row['middlename'];
                                    $query = "INSERT INTO tbl_audit_trail(username, firstname, lastname, middlename, 
                                    timein, activity, date) 
                                    VALUES('$uName', '$firstname', '$lastname', '$middlename', '$time', 'Search Product to the inventory','$date')";
                                    mysqli_query($db, $query);
                                }
                            }

                            $sql = "SELECT * FROM tbl_user WHERE username='$username'";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $store = $row['store'];

                                    $sql = "SELECT * FROM tbl_product_store WHERE (productId='$search' OR brandName='$search'
                                    OR type='$search' OR model='$search' OR quantity='$search' OR price='$search')
                                    AND (store = '$store')";
                                    $result = $db->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            if($row['quantity'] <= 8) {
                                                ?>
                                                    <tr>
                                                        <td style="background: red"><?php echo $row['productId'];?></td>
                                                        <td style="background: red"><?php echo $row['brandName'];?></td>
                                                        <td style="background: red"><?php echo $row['type'];?></td>
                                                        <td style="background: red"><?php echo $row['model'];?></td>
                                                        <td style="background: red"><?php echo $row['quantity'];?></td>
                                                        <td style="background: red"><?php echo "₱".$row['price'];?></td>
                                                    </tr>
                                                <?php
                                            } else if($row['quantity'] > 8 && $row['quantity'] <= 10) {
                                                ?>
                                                    <tr>
                                                        <td style="background: orange;"><?php echo $row['productId'];?></td>
                                                        <td style="background: orange;"><?php echo $row['brandName'];?></td>
                                                        <td style="background: orange;"><?php echo $row['type'];?></td>
                                                        <td style="background: orange;"><?php echo $row['model'];?></td>
                                                        <td style="background: orange;"><?php echo $row['quantity'];?></td>
                                                        <td style="background: orange;"><?php echo "₱".$row['price'];?></td>
                                                    </tr>
                                                <?php
                                            } else {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['productId'];?></td>
                                                        <td><?php echo $row['brandName'];?></td>
                                                        <td><?php echo $row['type'];?></td>
                                                        <td><?php echo $row['model'];?></td>
                                                        <td><?php echo $row['quantity'];?></td>
                                                        <td><?php echo "₱".$row['price'];?></td>
                                                    </tr>
                                                <?php
                                            }
                                        }
                                    } else {
                                        ?>
                                            <tr>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                            </tr>
                                        <?php
                                    }
                                }
                            }
                        } else {
                            $sql = "SELECT * FROM tbl_user WHERE username='$username'";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $store = $row['store'];

                                    $sql = "SELECT * FROM tbl_product_store WHERE store = '$store'";
                                    $result = $db->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            if($row['quantity'] <= 8) {
                                                ?>
                                                    <tr>
                                                        <td style="background: red"><?php echo $row['productId'];?></td>
                                                        <td style="background: red"><?php echo $row['brandName'];?></td>
                                                        <td style="background: red"><?php echo $row['type'];?></td>
                                                        <td style="background: red"><?php echo $row['model'];?></td>
                                                        <td style="background: red"><?php echo $row['quantity'];?></td>
                                                        <td style="background: red"><?php echo "₱".$row['price'];?></td>
                                                    </tr>
                                                <?php
                                            } else if($row['quantity'] > 8 && $row['quantity'] <= 10) {
                                                ?>
                                                    <tr>
                                                        <td style="background: orange;"><?php echo $row['productId'];?></td>
                                                        <td style="background: orange;"><?php echo $row['brandName'];?></td>
                                                        <td style="background: orange;"><?php echo $row['type'];?></td>
                                                        <td style="background: orange;"><?php echo $row['model'];?></td>
                                                        <td style="background: orange;"><?php echo $row['quantity'];?></td>
                                                        <td style="background: orange;"><?php echo "₱".$row['price'];?></td>
                                                    </tr>
                                                <?php
                                            } else {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['productId'];?></td>
                                                        <td><?php echo $row['brandName'];?></td>
                                                        <td><?php echo $row['type'];?></td>
                                                        <td><?php echo $row['model'];?></td>
                                                        <td><?php echo $row['quantity'];?></td>
                                                        <td><?php echo "₱".$row['price'];?></td>
                                                    </tr>
                                                <?php
                                            }
                                        }
                                    } else {
                                        ?>
                                            <tr>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                            </tr>
                                        <?php
                                    }
                                }
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