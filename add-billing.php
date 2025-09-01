<?php
// ডেটাবেজ কানেকশন
$con=mysqli_connect("localhost","root","","myhmsdb");

// রোগীদের নাম তালিকায় আনতে
$patients = $con->query("SELECT id, name FROM patients");
?>

<h2>বিল যোগ করুন</h2>
<form action="add-billing-process.php" method="POST">
  <label>রোগী:</label>
  <select name="patient_id" required>
    <?php while($p = $patients->fetch_assoc()): ?>
      <option value="<?= $p['id'] ?>"><?= $p['name'] ?></option>
    <?php endwhile; ?>
  </select><br>

  <label>টাকা:</label>
  <input type="number" name="amount" required><br>

  <label>টাইপ:</label>
  <select name="type">
    <option value="recharge">Recharge</option>
    <option value="consultation">Consultation</option>
    <option value="medicine">Medicine</option>
  </select><br>

  <input type="submit" value="Save">
</form>