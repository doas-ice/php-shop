<?php
session_start();
// Check if the user is not logged in, then redirect the user to login page
if (!isset($_SESSION["userid"]) || !$_SESSION["userid"]) {
	$error .= "You need to be logged in";
	header("location: login.php?loginrequired=" . $error);
	exit;
}
require_once "config.php";
$uid = $_SESSION["userid"];
$pid = $_GET["pid"];

$sql = "SELECT * FROM cart WHERE uid=" . $uid . " AND pid=" . $pid . ";";
$cartresult = mysqli_query($db, $sql);

if (mysqli_num_rows($cartresult) > 0) {
	while ($cart = mysqli_fetch_assoc($cartresult)) {
		$qty = (int) $cart["qty"] + 1;
		$cid = $cart["id"];
		$sql2 = "UPDATE `cart` SET `qty` = " . $qty . " WHERE `cart`.`id` = " . $cid . ";";
		mysqli_query($db, $sql2);
	}
} else {
	$qty = 1;
	$sql2 = "INSERT INTO cart (uid, pid, qty) VALUES (" . $uid . ", " . $pid . ", " . $qty . ") ";
	mysqli_query($db, $sql2);
}
header("location: cart.php");
?>
