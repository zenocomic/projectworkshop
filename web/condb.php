<?php
session_start();
//เปลี่นรหัสผ่านตรง 1234
$conn = new mysqli('localhost', 'root', '', 'form');
$conn->set_charset("utf8");
//$conn->query('set name utf8');
//echo $conn->connect_error;
if ($conn->connect_errno) {
    die("conmection Failed" . $conn->connect_error);
} /*else {
    die("OK Database");
}
 */