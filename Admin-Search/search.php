<?php
    session_start();
    $username = $_SESSION['username'];

    $dbHost     = "localhost"; 
    $dbUsername = "root"; 
    $dbPassword = ""; 
    $dbName     = "warehouse_management_system";
    
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) 
    { 
        die("Connection failed: " . $db->connect_error); 
    }

    $searchTerm = $_GET['term'];

    $search = array();
    $query = $db->query("SELECT DISTINCT username FROM tbl_user WHERE username LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['username'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT firstname FROM tbl_user WHERE firstname LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['firstname'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT lastname FROM tbl_user WHERE lastname LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['lastname'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT middlename FROM tbl_user WHERE middlename LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['middlename'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT contactnumber FROM tbl_user WHERE contactnumber LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['contactnumber'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT email FROM tbl_user WHERE email LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['email'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT store FROM tbl_user WHERE store LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['store'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT productId FROM tbl_product WHERE productId LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['productId'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT brandName FROM tbl_product WHERE brandName LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['brandName'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT type FROM tbl_product WHERE type LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['type'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT model FROM tbl_product WHERE model LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['model'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT color FROM tbl_product WHERE color LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['color'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT quantity FROM tbl_product WHERE quantity LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['quantity'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT price FROM tbl_product WHERE price LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['price'];
            array_push($search, $data); 
        } 
    }

    echo json_encode($search);
?>