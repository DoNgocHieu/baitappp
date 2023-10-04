<?php
$monkhaivi = isset($_POST['monkhaivi']) ? $_POST['monkhaivi'] : array();
$monchinh = isset($_POST['monchinh']) ? $_POST['monchinh'] : array();
$montrangmieng = isset($_POST['montrangmieng']) ? $_POST['montrangmieng'] : array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title>Menu</title>
    <style>
        .col-4{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div class="container">
    <h3 style="text-align: center;"><strong>Thực đơn đã chọn</strong></h3>
    <div class="row">
        <div class="col-4">
            <ul>
            Món khai vị :
            <?php
            if (is_array($monkhaivi)) {
                foreach ($monkhaivi as $monkv) {
                    echo "<li>$monkv</li>";
                }
            } else {
                echo "Không có món khai vị được chọn.";
            }
            ?>
            <ul>
        </div>
        <div class="col-4">
            Món chính :
            <?php
            if (is_array($monchinh)) {
                foreach ($monchinh as $monc) {
                    echo "<li>$monc</li>";
                }
            } else {
                echo "Không có món chính được chọn.";
            }
            ?>
        </div>
        <div class="col-4">
            Món tráng miệng :
            <?php
            if (is_array($montrangmieng)) {
                foreach ($montrangmieng as $montm) {
                    echo "<li>$montm</li>";
                }
            } else {
                echo "Không có món tráng miệng được chọn.";
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>
