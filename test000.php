<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $price = $_POST["price"];
        $payment = $_POST["payment"];
        $money = $price - $payment;

        echo "<p>เงินถอน: $money บาท</p>";

        $denominations = array(1000, 500, 100, 50, 20, 10, 5, 2, 1);

        foreach ($denominations as $denomination) {
            if ($money >= $denomination) {
                $count = (int)($money / $denomination);
                echo "<p>$denomination บาท = $count เเบงค์/เหรียญ</p>";
                $money = $money % $denomination;
            }
        }
    }
    ?>
