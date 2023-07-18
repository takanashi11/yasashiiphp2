<?php
$user ="suzuki";
$pass ="Pw111";
$dbh = new PDO('mysql:host=localhost;dbname=db1;charset=utf8',$user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM recipes";
$stmt = $dbh->query($sql);
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
print_r($result);
$dbh = null;
?>