<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>
                Nhập vào số a:
            </td>
            <td>
                <input type="text" name="a">
            </td>
        </tr>
        <tr>
            <td>
                Nhập vào số b:
            </td>
            <td>
                <input type="text" name="b">
            </td>
        </tr>
        <tr>
            <td>
                Nhập vào số c:
            </td>
            <td>
                <input type="text" name="c">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button>Kết quả</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
include('QuadraticEquation.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $quad = new QuadraticEquation($a, $b, $c);
    $quad->getter();
    echo 'Delta= ' . $quad->getDiscriminant() . '<br>';
    $quad->getRoot1();
}
?>
