<?php

$n = $_POST["n"];
$u = $_POST["u"];
$p1 = $_POST["p1"];
$p2 = $_POST["p2"];

// echo $n.$u.$p1.$p2;


if (empty($n)) {
    echo "Please enter your First name";
} elseif (empty($u)) {
    echo "Please enter your User name";
}  elseif (empty($p1)) {
    echo "Please enter your password";
} elseif (empty($p2)) {
    echo "Please enter your repeat password";
} else {
    $connection = new mysqli("localhost", "root", "Dds1234@56A$", "php15", "3306");

    $resultset = $connection->query("SELECT * FROM `user` WHERE `email`='" . $e . "' OR `password`='" . $p . "'");

    if ($resultset->num_rows == 0) {

        $connection->query("INSERT INTO `user`(`name`,`email`,`mobile`,`password`,`city`) VALUES ('" . $n . "','" . $e . "','" . $m . "','" . $p . "','" . $c . "')");
    } else {
        echo "New User Sign Up";
    }
}
