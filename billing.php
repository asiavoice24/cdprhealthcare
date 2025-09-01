<?php 
include('header.php');
include('sidebar.php');
$con=mysqli_connect("localhost","root","","myhmsdb");
?>
<div class="content" style="padding:20px;">
    <h2>Billing Module</h2>
    <p>রোগীর বিল দেখা এবং ম্যানেজ করা।</p>
    <!-- উদাহরণ টেবিল -->
    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <tr>
            <th>Invoice ID</th>
            <th>Patient Name</th>
            <th>Doctor</th>
            <th>Amount</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>#INV001</td>
            <td>Rahim Uddin</td>
            <td>Dr. Karim</td>
            <td>2000 Tk</td>
            <td>Paid</td>
        </tr>
        <tr>
            <td>#INV002</td>
            <td>Hasina Begum</td>
            <td>Dr. Jamil</td>
            <td>1500 Tk</td>
            <td>Unpaid</td>
        </tr>
    </table>

    <br>
    <a href="add-billing.php" style="background:#007BFF; color:#fff; padding:10px 15px; text-decoration:none; border-radius:5px;">
        + Add New Bill
    </a>
</div>

<div class="footer-inner">
					<div class="pull-left">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> CDPR</span>. <span>Developed by <div Suman=""></div></span><span>All rights reserved</span>
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="ti-angle-up"></i></span>
					</div>
				</div>
			</footer>