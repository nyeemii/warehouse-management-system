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
    <link rel="stylesheet" href="../CSS/employee-search.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
    <script src="jquery-ui/jquery-ui.min.js"></script>
    <title>Employee Search</title>
</head>
<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Employee-Homepage/employee-homepage.php">Profile</a>
        <a href="../Employee-Gallery/employee-gallery.php">Gallery</a>
        <a href="../Employee-Barcode-Generator/employee-barcode-generator.php">Barcode Generator</a>
        <a href="./employee-search.php" style="color: #4B778D">Search</a>
        <button class="dropdown-btn">Product Monitoring 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Employee-Incoming-Product/employee-incoming-product.php">Incoming Product</a>
            <a href="../Employee-Outgoing-Product/employee-outgoing-product.php">Outgoing Product</a>
            <a href="../Employee-Stock-Replenishment/employee-stock-replenishment.php">Stock Replenishment</a>
        </div>
        <button class="dropdown-btn">Maintenance 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="../Employee-Maintenance/employee-maintenance.php">Edit</a>
            </div>
        <a href="../Employee-Help/employee-help.php">Help</a>
        <a href="employee-search.php?logout=<?php echo "$username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="search-header ">Search</h1>
            <form action="employee-search.php" method="post" class="search-form">
            <label for="search">Search</label>
            <input type="text" name="search" id="search" aria-labelledby="search-label" placeholder="Start typing..." required>
            <input type="submit" name="btn_search" value="Search">
            </form>
            <a class="refresh" href="employee-search.php">Refresh</a>
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
                            VALUES('$uName', '$firstname', '$lastname', '$middlename', '$time', 'Searched user or product','$date')";
                            mysqli_query($db, $query);
                        }
                    }

                    $sql = "SELECT * FROM tbl_user WHERE username='$search' OR firstname='$search' OR
                    lastname='$search' OR middlename='$search' OR contactnumber='$search' OR email='$search'
                    OR store='$search'";
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) {
                        ?>
                        <table>
                            <thead>
                                <th>Username</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Middle name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Store</th>
                            </thead>
                            <tbody>     
                        <?php
                        while($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['username'];?></td>
                                <td><?php echo $row['firstname'];?></td>
                                <td><?php echo $row['lastname'];?></td>
                                <td><?php echo $row['middlename'];?></td>
                                <td><?php echo $row['contactnumber'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['store'];?></td>   
                            </tr>
                            <?php
                        }
                        ?>    
                            </tbody>
                        </table>
                        <?php
                    }

                    $sql = "SELECT * FROM tbl_product WHERE productId='$search' OR brandName='$search' OR
                    type='$search' OR model='$search' OR color='$search' OR quantity='$search'
                    OR price='$search'";
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) {
                        ?>
                        <table>
                            <thead>
                                <th>Product Id</th>
                                <th>Brand Name</th>
                                <th>Type</th>
                                <th>Model</th>
                                <th>Color</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </thead>
                            <tbody>
                        <?php
                        while($row = $result->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $row['productId'];?></td>
                                    <td><?php echo $row['brandName'];?></td>
                                    <td><?php echo $row['type'];?></td>
                                    <td><?php echo $row['model'];?></td>
                                    <td><?php echo $row['color'];?></td>
                                    <td><?php echo $row['quantity'];?></td>
                                    <td><?php echo $row['price'];?></td>
                                </tr>
                            <?php
                        }
                        ?>
                            </tbody>
                        </table>
                        <?php
                    }
                }
            ?>
        </form>
        </div>
    </div>
    <script src="../index.js"></script>
    <script src="./auto-complete.js"></script>
</body>
</html>