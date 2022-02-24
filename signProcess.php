<?php

$e = $_POST["e"];
$p = $_POST["p"];

$connection = new mysqli("localhost","root","Dds1234@56A$","php15","3306");
$resultset = $connection->query("SELECT *FROM `user`WHERE `email`='".$e."' AND `password`='".$p."'");

$n = $resultset->num_rows;

if ($n==1) {
    echo "Success";


}else{
    echo  "Error";
}

