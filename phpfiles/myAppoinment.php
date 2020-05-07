<?php if (!isset($_SESSION)) {
	session_start();
}
?>

<?php include('../phpfiles/header.php'); ?>






<!-- this is for donor registraton -->
<br><br><br>
	<h3 class="text-center" style="color: #0000FF;padding: 30px;">Today's Appoinment</h3>

<div class="all_user" style="margin-top:0px; margin-left: 40px;">
	<?php
	include('../phpfiles/db.php');

	$sql = " SELECT * FROM booking WHERE userid='" . $_SESSION["userid"] . "' AND  dname='" . $_SESSION["dname"] . "'" ;
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

	if ($count >= 1) {
		echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Patient Name</th>
								<th>Contact</th>
								<th>E-mail</th>
								<th>address</th>
								<th>Date</th>
								<th>Time</th>
							</tr>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['pname'] . "</td>";
			echo "<td>" . $row['pcontact'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['address'] . "</td>";
			echo "<td>" . $row['dates'] . "</td>";
			echo "<td>" . $row['tyme'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
	}

	?>
</div>
</div><!--  containerFluid Ends -->
<script src="../js/bootstrap.min.js"></script>
</body>

</html>