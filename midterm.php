<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP!</title>
</head>
<body>
    <!-- <?php echo "Hello World"; ?> -->
     <table border="1">
        <form action="index.php" method="POST">
            <tr>
                <td>Enter Number 1</td>
                <td><input type="text" name="number1" placeholder="Enter your number 1"></td>
            </tr>
             <tr>
                <td>Enter Number 2</td>
                <td><input type="text" name="number2" placeholder="Enter your number 2"></td>
            </tr>
             <tr>
                <td>&nbsp;</td>
                <td><input type="submit" placeholder="Submit"></td>
            </tr>
        </form>
    </table>
     <?php
     if(isset($_POST['number1']) && isset($_POST['number2']))
        {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $border = 1;
            $sum = $number1 + $number2;
            $difference = $number1 - $number2;
            $product = $number1 * $number2;
            $quotient = $number1 / $number2;
            $modulo = $number1 % $number2;
            echo "<table border=$border><tr><td>The Sum</td><td>$sum</td></tr><tr><td>The Difference</td><td>$difference</td></tr>
            <tr><td>The Product</td><td>$product</td></tr><tr><td>The Quotient</td><td>$quotient</td></tr>
            <tr><td>The Modulo</td><td>$modulo</td></tr><table>";
        }
    ?>
</body>
</html>