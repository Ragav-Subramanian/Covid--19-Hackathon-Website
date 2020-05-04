<?php session_start();  ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>medical management system</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<style>
		.error {
			color: #FF0000;
		}
	</style>
</head>

<body>



	<div class="container-fluid">
		<div class="header_top">


		</div>

		<!-- 	this is for menu -->
		<div class="navbar navbar-default nav">
			<nav class="menu">
				<ul>
					<li><a href="../index.php">Home</a></li>

					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>







		<!-- this is for donor registraton -->
		<div class="login" style="background-color:#fff;">
			<h1 class="text-center" style="background-color:#4ADA75;color: #fff;">Doctor Panel</h1>
			<div class="formstyle" style="float:right;padding: 10px;border: 1px solid lightgrey;margin-right: 376px;margin-left: 406px; margin-bottom: 25px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						<input type="text" name="userid" placeholder="userid" required>
					</label><br><br>
					<label>
						<input type="password" name="password" placeholder="password">
					</label><br><br>
					<br>
					<button name="submit" type="submit" style="margin-left:-26px;width:85;border-radius: 4px;">Login</button> <br>
					<br>
					<span style="color:#000;">Not a member yet?</span> <a href="addDoctor.php" title="create a account" target="" style="color:#000;">&nbsp;Register</a> <br>



					<!-- login validation -->
					<?php
					$_SESSION['doctor'] = "";

					include('../config.php');
					if (isset($_POST["submit"])) {

						$sql = "SELECT * FROM doctor WHERE userid= '" . $_POST["userid"] . "' AND password= '" . $_POST["password"] . "'";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							$_SESSION["userid"] = $_POST["userid"];
							// $_SESSION["type"]=$result[2];
							$_SESSION['doctor'] = "yes";
							echo "<script>location.replace('myDetails.php');</script>";
							// echo "u are supposed to redirect to ur profile";
						} else {
							echo "<span style='color:red;'>Invalid username or password</span>";
						}
						$conn->close();
					}

					?>
					<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;

				<br>






			</div>


		</div>

		<?php include('../footer.php'); ?>


	</div><!--  containerFluid Ends -->




	<script src="../js/bootstrap.min.js"></script>








</body>

</html>