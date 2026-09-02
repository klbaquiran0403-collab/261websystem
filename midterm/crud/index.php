<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="index.php" method="POST" onsubmit="return confirm('Are you sure?')">
            <tr>
                <td>Enter Code:</td>
                <td><input type="text" name="code" placeholder="Enter Code"></td>
            </tr>
            <tr>
                <td>Enter Description:</td>
                <td><input type="text" name="description" placeholder="Enter Description"></td>
            </tr>
            <tr>
                <td>Enter Address:</td>
                <td><input type="text" name="address" placeholder="Enter Address"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" placeholder="submit"></td>
            </tr>
        </form>
    </table>    
    <?php
    $conn = mysqli_connect("localhost", "root", "", "jpcs");
    if(!$conn)
    {
            die("Connection failed: " . mysqli_connect_error());

    }
    else
    {
                echo "Connected successfully";
    }

    if(isset($_POST['submit']))
        {
            $code = $_POST['code'];
            $description = $_POST['description'];
            $address = $_POST['address'];

            $sql_insert = "INSERT INTO school(code,description,address) 
                            VALUES ('$code', '$description', '$address')";

            if(mysqli_query($conn, $sql_insert))
                {
                    echo "New record created susccessfully!";
                }
        }


    $sql ="SELECT * FROM school";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
        {
            echo "<table border = '1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Code</th>";
            echo "<th>Description</th>";
            echo "<th>Address</th>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>". $row["id"] . "</td>";
                    echo "<td>". $row["code"] . "</td>";
                    echo "<td>". $row["description"] . "</td>";
                    echo "<td>". $row["address"] . "</td>";
                }
                echo"</table>";
        }
        else
            {
                echo "0 results";
            }
    ?>
</body>
</html>