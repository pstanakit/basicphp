<?php

// ตัวแปร
$host   = "localhost";
$user   = "root";
$pass   = "admin";
$dbname = "phpbasicdb";

// Conect Database
$connect = mysqli_connect($host, $user, $pass, $dbname);

// เข้ารหัส utf-8
mysqli_set_charset($connect, 'utf8');
// mysqli_set_charset($connect, 'utf-8');

// ตรวจสถานะการเชื่อมต่อ
if ($connect)
{
    // echo "Conect database success";
}
else
{
    echo "Conect database fail!!!";
}
