<?php
session_start();
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$_SESSION["username"]=$a;
$_SESSION["password"]=$b;
$_SESSION["registernumber"]=$c;
echo "USERNAME: ".$_SESSION["username"]."<br>";
echo "PASSWORD:".$_SESSION["password"]."<br>";
echo "REGISTER NUMBER: ".$_SESSION["registernumber"]
?>
