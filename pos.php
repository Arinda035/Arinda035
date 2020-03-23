<?php
session_start();

$empno = $_SESSION['empno'];

//connect database
require_once 'db.php';

$sql = "SELECT * FROM emp WHERE EMPNO = ?";
$statement = $connection->prepare($sql);
$statement->execute([$empno]);
$emp = $statement->fetch(PDO::FETCH_OBJ);
$ename = $emp->ENAME;
echo $ename;
session_unset();
?>