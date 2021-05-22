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

    if (isset($_POST['btn_edit1'])) {
        $uname = mysqli_real_escape_string($db, $_POST['uname']);
        $brand = mysqli_real_escape_string($db, $_POST['brand']);
        $model = mysqli_real_escape_string($db, $_POST['model']);
        $price = mysqli_real_escape_string($db, $_POST['price']);

        $sql = "SELECT brandName FROM tbl_product WHERE brandName='$brand' AND model='$model'";
        $result = $db->query($sql);
        if ($result->num_rows === 0) {
            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Product you entered does not exist
                </div>
            <?php
        } else {
            $query = "UPDATE tbl_product SET price = '$price' WHERE brandName='$brand' AND model='$model'";
            mysqli_query($db, $query);

            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Successfully updated price
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
                    VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Update price','$date')";
                    mysqli_query($db, $query);
                }
            }
        }
    }

    if (isset($_POST['button_backup']))
	{
        $uname = mysqli_real_escape_string($db, $_POST['uname']);

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
                VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Backup Database','$date')";
                mysqli_query($db, $query);
            }
        }
		$tables = array();
		$result = mysqli_query($db,"SHOW TABLES");
		while($row = mysqli_fetch_row($result))
		{
			$tables[] = $row[0];
		}
		$return = '';
		foreach($tables as $table)
		{
			$result = mysqli_query($db,"SELECT * FROM ".$table);
			$num_fields = mysqli_num_fields($result);

			$return .= 'DROP TABLE '.$table.';';
			$row2 = mysqli_fetch_row(mysqli_query($db,"SHOW CREATE TABLE ".$table));
			$return .= "\n\n".$row2[1].";\n\n";

			for($i=0;$i<$num_fields;$i++)
			{
				while($row = mysqli_fetch_row($result))
				{
					$return .= "INSERT INTO ".$table." VALUES(";
					for($j=0;$j<$num_fields;$j++)
					{
						$row[$j] = addslashes($row[$j]);
						if(isset($row[$j]))
						{ 
							$return .= '"'.$row[$j].'"';
						}
						else
						{ 
							$return .= '""';
						}
						if($j<$num_fields-1)
						{ 
							$return .= ',';
						}
					}
					$return .= ");\n";
				}
			}

			$return .= "\n\n\n";
		}

		//save file
		$handle = fopen("backup.sql","w+");
		//$handle = fopen("backup.sql","w+");
		fwrite($handle,$return);
		fclose($handle);
		?>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                Successfully backed up database
            </div>
        <?php
	}
	if (isset($_POST['button_restore']))
	{
		$filename = "backup.sql";
		//$filename = "backup.sql";
		$handle = fopen($filename,"r+");
		$contents = fread($handle,filesize($filename));
		$sql = explode(';',$contents);
		foreach($sql as $query)
		{
		  $result = mysqli_query($db,$query);
		  if($result)
		  {
			//echo "Successfully imported";
		  }
		}
		fclose($handle);
		?>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                Successfully restore database
            </div>
        <?php
	}
?>