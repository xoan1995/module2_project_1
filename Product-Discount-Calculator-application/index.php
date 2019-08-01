<!doctype html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post" action="index.php">
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="description"/><br/>
            <label>List Price:</label>
            <input type="text" name="price"/><br/>
            <label>Discount Percent:</label>
            <input type="text" name="discount_percent"/>(%)<br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate Discount"/>
        </div>
        <br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $listPrice = $_POST['price'];
            $discountPercent = $_POST['discount_percent'];
            $discountAmount = $listPrice * $discountPercent * 0.1;
            echo "Discount Amount:" . " " . "$" . $discountAmount;
        }
        ?>
    </form>
</div>
</body>
</html>
