<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#4ADA75;color: #fff;padding: 5px;">My Appoinment</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');
					

					$sql = " SELECT * FROM booking WHERE email = '".$_SESSION["email"]."'  ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>My Disease Type</th>
								<th>My Doctor</th>
								<th>Appoinment Date</th>
								<th>Time</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['tyme']."</td>";
						?>
					<?php
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>

			
    </div>
	</div><!--  containerFluid Ends -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
