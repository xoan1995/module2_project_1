<!--<html>-->
<!--<title></title>-->
<!--<head></head>-->
<!--<body>-->
<!--<form method="post">-->
<!--    <table width="350" border="1" align="center" cellpadding="2" bgcolor="#f0f8ff">-->
<!--        <tr align="center" bgcolor="blue">-->
<!--            <td colspan="3" bgcolor="aqua"><span class="style">Read number</span></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td width="133"><p align="center"><span>&nbsp Enter number</span></p></td>-->
<!--            <td width="57"><span class="style5"><label></label></span></td>-->
<!--            <td width="140">-->
<!--                <div align="center"><span class="style5">word:</span></div>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td><p align="center"><input type="number" name="number"></p></td>-->
<!--            <td><p align="center"><input type="submit" value="submit"></p></td>-->
<!--            <td><p align="center"><input type="text" name="word"></p></td>-->
<!---->
<!--        </tr>-->
<!--    </table>-->
<?php
//if (isset($_POST["number"])) {
//    $number = $_POST["number"];
//    switch ($number) {
//        case 0:
//           $word= "Khong";
//            break;
//        case 1:
//            $word= "Mot";
//            break;
//        case 2:
//            $word=  "Hai";
//            break;
//        case 3:
//            $word=  "Ba";
//            break;
//        case 4:
//            $word=  "Bon";
//            break;
//        case 5:
//            $word= "Nam";
//            break;
//        case 6:
//            $word= "Sau";
//            break;
//        case 7:
//            $word= "Bay";
//            break;
//        case 8:
//            $word= "Tam";
//            break;
//        case 9:
//            $word=  "Chin";
//            break;
//        default:
//            $word= "Khong hop le";
//            break;
//    }
//}
//?>
<!--</form>-->
<!--</body>-->
<!--</html>-->
<!doctype html>
<html lang"en">
<head>
    <meta charset"UTF-8">
    <meta name"viewport"
    content"widthdevice-width, user-scalableno, initial-scale1.0, maximum-scale1.0, minimum-scale1.0">
    <meta http-equiv"X-UA-Compatible" content"ieedge">
    <title>Document</title>

</head>
<body>
<form method="post">
    <input type="number" name="number" size="30" placeholder="Enter the number">
    <input type="submit" value="submit">
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $number=$_POST['number'];
        switch ($number){
            case 0:
                echo "Zero";
                break;
            case 1:
                echo  "One";
                break;
            case 2:
                echo  "Two";
                break;
            case 3:
                echo  "Three";
                break;
            case 4:
                echo  "Four";
                break;
            case 5:
                echo  "Five";
                break;
            case 6:
                echo  "Six";
                break;
            case 7:
                echo  "Seven";
                break;
            case 8:
                echo  "Enght";
                break;
            case 9:
                echo  "Nine";
                break;
            default:
                echo  "Khong hop le";
                break;
        }
    }?>
</form>
</body>
</html>