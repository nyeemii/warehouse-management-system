<?php
    if (isset($_POST['btn_submit'])) {
        $trackingID = mysqli_real_escape_string($db, $_POST['trackingID']);
        $uname = mysqli_real_escape_string($db, $_POST['uname']);

        $sql = "SELECT * FROM tbl_outgoing_product WHERE id = '$trackingID'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $product_id = $row['product_id'];
                $brandName = $row['brandName'];
                $type = $row['type'];
                $model = $row['model'];
                $price = $row['price'];
                $quantity = $row['quantity'];
                $store = $row['store'];

                date_default_timezone_set('Asia/Manila');
                $date = date("M j, Y");
                $time = date("h:i a");

                $query = "INSERT INTO tbl_incoming_product_branch(id, productID, date, brand_name, type, model, price, quantity, store)
                VALUES('$trackingID', '$product_id', '$date', '$brandName', '$type', '$model', '$price', '$quantity', '$store')";
                mysqli_query($db, $query);

                $sql1 = "SELECT * FROM tbl_product WHERE model = '$model'";
                $result1 = $db->query($sql1);
                if ($result1->num_rows > 0) {
                    while($row1 = $result1->fetch_assoc()) {
                        $qty = $row1['quantity'];
                        $total = $qty - $quantity;

                        $query = "UPDATE tbl_product SET quantity = '$total' WHERE model = '$model'";
                        mysqli_query($db, $query);
                    }
                }

                $sql2 = "SELECT * FROM tbl_user WHERE username = '$uname'";
                $result2 = $db->query($sql2);
                if ($result2->num_rows > 0) {
                    while($row2 = $result2->fetch_assoc()) {
                        $firstname = $row2['firstname'];
                        $lastname = $row2['lastname'];
                        $middlename = $row2['middlename'];

                        $query = "INSERT INTO tb_daily_attendance(time, date, staff, typeOfTransaction, brand, type, quantity)
                        VALUES('$time', '$date', '$firstname $middlename $lastname', 'Delivered Product', '$brandName',
                        '$type', '$quantity')";
                        mysqli_query($db, $query);
                    }
                }

                $query = "DELETE FROM tbl_outgoing_product WHERE id = '$trackingID';";
                mysqli_query($db, $query);

                $sql = "SELECT * FROM tbl_user WHERE username='$uname'";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        date_default_timezone_set('Asia/Manila');
                        $time = date("h:i a");
                        $date = date("M j, Y");
                        $uName = $row['username'];
                        $fname = $row['firstname'];
                        $lname = $row['lastname'];
                        $mname = $row['middlename'];
                        $query = "INSERT INTO tbl_audit_trail(username, firstname, lastname, middlename,
                        timein, activity, date)
                        VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Delivered Product','$date')";
                        mysqli_query($db, $query);
                    }
                }

                ?>
                  <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                      Success!
                  </div>
                <?php
            }
        } else {
            ?>
              <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                  Invalid tracking id
              </div>
            <?php
        }
    }
?>
