
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
<form method="post">
    <table>
        <tr>
            <td><h2>Inventment Amount: </h2></td>
            <td><input type="text" name="present_value" placeholder="Nhập lượng tiền đầu tư ban đầu..."></td>
        </tr>
        <tr>
            <td><h2>Yearly Interest Rate: </h2></td>
            <td><input type="text" name="interest_rate" placeholder="Nhập lãi suất năm..."></td>
        </tr>
        <tr>
            <td><h2>Number of Years: </h2></td>
            <td><input type="text" name="years" placeholder="Nhập số năm đầu tư..."></td>
        </tr>
        <tr>
            <td>
                <button type="submit" id="submit">Calculate</button>
            </td>
        </tr>
    </table>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value_1 = $_POST["present_value"];
    $value_2 = $_POST["interest_rate"];
    $value_3 = $_POST["years"];
    $future = ($value_1 + ($value_1*$value_2))*$value_3;
    echo "<h2> $future </h2";
}
?>
</body>
</html>
