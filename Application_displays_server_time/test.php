<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<?php
$cars = [
   "1"=> ["ten"=>"Ranger","sp"=>15, "cs"=>13],
    "2"=>  ["ten"=>"BMW","sp"=>15, "cs"=>13],
    "3"=> ["ten"=>"Volvo","sp"=>15, "cs"=>13],
    "4"=>  ["ten"=>"honda","sp"=>15, "cs"=>13],
];
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>SPeed</th>
            <th>CS</th>
        </tr>
       <?php foreach ($cars as $key=>$car) {?>

        <tr>
        <td><?php echo $car['ten'] ?></td>

        <td><?php echo $car['sp'] ?></td>


        <td><?php echo $car['cs'] ?></td>
    </tr>
       <?php }
       ?>
    </table>


</body>
</html>
