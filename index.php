<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giải phương trình bậc 2: ax2 + bx + c = 0</title>
</head>

<?php
$result = '';
if (isset($_POST['calculate'])) {
    $a = isset($_POST['a']) ? $_POST['a'] : '';
    $b = isset($_POST['b']) ? $_POST['b'] : '';
    $c = isset($_POST['c']) ? $_POST['c'] : '';

    $delta = ($b * $b) - (4 * $a * $c);
    if ($delta < 0) {
        $result = 'Phương trình vô nghiệm';
    } else if ($delta == 0) {
        $result = 'Phương trình có nghiệm kép x1 = x2 = ' . (-$b / 2 * $a);
    } else {
        $result = 'Phương trình có hai nghiệm phân biệt, x1 = ' . ((-$b + sqrt($delta)) / 2 * $a);
        $result .= ', x2 = ' . ((-$b - sqrt($delta)) / 2 * $a);
    }
}
?>
<h2>Giải phương trình bậc 2: ax2 + bx + c = 0</h2>
<form method="post">
    Nhập a <input type="text" name="a" value="" width="20px"/></br>
    Nhập b <input type="text" name="b" value="" width="20px"/></br>
    Nhập c <input type="text" name="c" value="" width="20px"/></br>
    <input type="submit" name="calculate" value="Calculate"/></br>
    <?php
    echo $result;
    ?>
</form>

</body>
</html>