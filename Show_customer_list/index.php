<html>
<head>
    <title>Hien thi danh sach khach hang</title>
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
<table border="1">
    <caption><h1>Danh sach khach hang</h1></caption>
    <tr>
        <th>STT</th>
        <th>ten</th>
        <th>ngay sinh</th>
        <th>dia chi</th>
        <th>anh</th>
    </tr>

    <?php
    $customerList = array(
        "1" => array("ten" => "Mai Van Hoan",
            "ngay sinh" => "20-08-1983",
            "dia chi" => "Ha Noi",
            "anh" => "images/img1.jpg"),
        "2" => array("ten" => "Nguyen Van Nam",
            "ngay sinh" => "04-08-1983",
            "dia chi" => "Bac Giang",
            "anh" => "images/img2.jpg"),
        "3" => array("ten" => "Nguyen Thai Hoa",
            "ngay sinh" => "15-08-1983",
            "dia chi" => "Nam Dinh",
            "anh" => "images/img3.jpg"),
        "4" => array("ten" => "Tran Dang Khoa",
            "ngay sinh" => "30-08-1983",
            "dia chi" => "Ha Tay",
            "anh" => "images/img4.jpg"),
        "5" => array("ten" => "Nguyen Dinh Thi",
            "ngay sinh" => "27-08-1983",
            "dia chi" => "Ha Noi",
            "anh" => "images/img5.jpg")
    );
    ?>
    <?php
    foreach ($customerList as $key => $customer) {
        ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $customer['ten'] ?></td>
            <td><?php echo $customer['ngay sinh'] ?></td>
            <td><?php echo $customer['dia chi'] ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
