<?php
    if (isset($_POST['btn_edit'])) {
        $uname = mysqli_real_escape_string($db, $_POST['uname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $confPassword = mysqli_real_escape_string($db, $_POST['confPassword']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $contactNumber = mysqli_real_escape_string($db, $_POST['contactNumber']);

        if (empty($email) && empty($password) && empty($address) && empty($contactNumber)) 
		{ 
			?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Please fill out the form
                </div>
            <?php
		}  else if ($password != $confPassword) {
            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Password do not match
                </div>
            <?php
  		} else if (!empty($email)) {
            $sql = "SELECT email FROM tbl_user WHERE email='$email'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Email already exist
                    </div>
                <?php
            } else {
                $query = "UPDATE tbl_user SET email = '$email' WHERE username='$uname'";
                mysqli_query($db, $query);

                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Successfully updated email
                    </div>
                <?php

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
                        VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Update email address','$date')";
                        mysqli_query($db, $query);
                    }
                }
            }
        } else if (!empty($password)) {
            $query = "UPDATE tbl_user SET password = '$password' WHERE username='$uname'";
            mysqli_query($db, $query);

            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Successfully updated password
                </div>
            <?php

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
                    VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Update password','$date')";
                    mysqli_query($db, $query);
                }
            }
        } else if (!empty($address)) {
            $query = "UPDATE tbl_user SET address = '$address' WHERE username='$uname'";
            mysqli_query($db, $query);

            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Successfully updated address
                </div>
            <?php

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
                    VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Update address','$date')";
                    mysqli_query($db, $query);
                }
            }
        } else if (!empty($contactNumber)) {
            $sql = "SELECT contactnumber FROM tbl_user WHERE contactnumber='$contactNumber'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Contact Number already exist
                    </div>
                <?php
            } else {
                $query = "UPDATE tbl_user SET contactnumber = '$contactNumber' WHERE username='$uname'";
                mysqli_query($db, $query);

                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Successfully contact number
                    </div>
                <?php

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
                        VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Update contact number','$date')";
                        mysqli_query($db, $query);
                    }
                }
            }
        }
    }
?>