<?php

include "connect.php";

if(isset($_POST['submit'])) {

    $code = $_POST['code'];
    $description = $_POST['description'];
    $address = $_POST['address'];

    $sql_insert = "INSERT INTO school (code, description, address) 
                   VALUES ('$code', '$description', '$address')";
    if (mysqli_query($conn, $sql_insert)) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }

}

if(isset($_GET['action']) && $_GET['action'] == 'del' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_delete = "DELETE FROM school WHERE id = $id";
    if (mysqli_query($conn, $sql_delete)) {
        echo "Record deleted successfully";
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>