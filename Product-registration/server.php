<?php
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    if (isset($_POST['submit-button'])) {
        $prodID = mysqli_real_escape_string($db, $_POST['prodID']);
        $brandName = mysqli_real_escape_string($db, $_POST['brandName']);
        $type = mysqli_real_escape_string($db, $_POST['type']);
        $model = mysqli_real_escape_string($db, $_POST['model']);
        $color = mysqli_real_escape_string($db, $_POST['color']);
        $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
        $price = mysqli_real_escape_string($db, $_POST['price']);
        $userName = mysqli_real_escape_string($db, $_POST['username']);

        $product_check_query = "SELECT * FROM tbl_product WHERE productId='$prodID' OR model='$model'";
        $result = mysqli_query($db, $product_check_query);
        $product = mysqli_fetch_assoc($result);
        if ($product) {
            if ($product['productId'] == $prodID) {
                ?>
                  <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                      Product Id already Exist
                  </div>
                <?php
            }
            if ($product['model'] == $model) {
                ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Model already Exist
                </div>
                <?php
            }
        } else {
            $query = "INSERT INTO tbl_product(productId, brandName, type, model, color, quantity, price)
            VALUES('$prodID','$brandName','$type','$model','$color','$quantity','$price')";
            mysqli_query($db, $query);

            $sql = "SELECT * FROM tbl_user WHERE username='$userName'";
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
                    VALUES('$uName', '$firstname', '$lastname', '$middlename', '$time', 'Registered Product','$date')";
                    mysqli_query($db, $query);
                }
            }

            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Product Registered Successfully!
                </div>
            <?php
        }
    }
?>