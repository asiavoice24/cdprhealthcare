<?php
session_start();
$patient = $conn->query("SELECT id FROM patients WHERE phone = '$phone'")->fetch_assoc();
$patient_id = $patient['id'];

$result = $conn->query("SELECT * FROM billing WHERE patient_id = $patient_id ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ওয়ালেট ট্রান্সাকশন</title>
  <style>
    table  border-collapse: collapse; width: 100
    th, td  border: 1px solid #ccc; padding: 8px; text-align: left; 
    th  background: #f0f0f0; 
  </style>
</head>
<body>
  <h2>ওয়ালেট হিস্ট্রি</h2>
  <table>
    <tr>
      <th>তারিখ</th>
      <th>পরিমাণ</th>
      <th>ধরন</th>
      <th>বিবরণ</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['created_at'] ?></td>
      <td><?= $row['amount'] ?> টাকা</td>
      <td><?= ucfirst($row['type']) ?></td>
      <td><?= $row['description'] ?? '-' ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
