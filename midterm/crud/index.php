<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="process.php" method="POST" onsubmit="return confirm('Are you sure?')">
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
    include "connect.php";

    $sql ="SELECT * FROM school";
    if(isset($_GET['search']) && !empty($_GET['search'])) {
            $sql .= " WHERE school.code LIKE '%" . $_GET['search']
                . "%' OR school.description LIKE '%"
                . $_GET['search'] . "%'";
        }
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
        {
            echo'<form action="index.php" method="GET">';
            echo'<br/><input type="text" name="search" placeholder="Search records...">';
            echo'<input type="submit" value="Search">';
            echo'</form>';
            echo "<table border = '1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Code</th>";
            echo "<th>Description</th>";
            echo "<th>Address</th>";
            echo "<th>Action</th>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>". $row["id"] . "</td>";
                    echo "<td>". $row["code"] . "</td>";
                    echo "<td>". $row["description"] . "</td>";
                    echo "<td>". $row["address"] . "</td>";
                    echo "<td><a href='process.php?action=del&id=". $row["id"] ."' 
                    onclick=\"return confirm('Are you sure?')\">Delete</a></td>";
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