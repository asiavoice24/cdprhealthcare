<?php
$conn = new mysqli("localhost", "root", "", "cdprhealthcare");

$patient_id = $_POST['patient_id'];
$amount = $_POST['amount'];
$type = $_POST['type'];

$conn->query("INSERT INTO billing (patient_id, amount, type) VALUES ('$patient_id', '$amount', '$type')");

// ওয়ালেট ব্যালেন্স আপডেট (যদি recharge হয়)
if($type == "recharge") $conn->query("UPDATE patients SET wallet_balance = wallet_balance + $amount WHERE id = $patient_id");

header("Location: billing-list.php");