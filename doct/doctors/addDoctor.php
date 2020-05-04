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

		<div class="navbar navbar-default nav">
			<nav class="menu">
				<ul>
					<li><a href="../index.php">Home</a></li>

					<li><a href="../patient/logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>
		<!-- this is for donor registraton -->
		<div class="recipient_reg" style="background-color:#4ADA75;">
			<h3 class="text-center" style="background-color:#4ADA75;color: #fff;">Add Doctor</h3>

			<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
				<form enctype="multipart/form-data" method="post" class="text-center" style="margin-left: 110px">
					<div class="col-md-12">
						<label>
							<input type="text" name="name" value="" placeholder="Full name" required>
						</label><br><br>
						<label>
							<input type="text" name="address" value="" placeholder="address" required>
						</label><br><br>
						<label>
							<input type="text" name="contact" value="" placeholder="contact" required>
						</label><br><br>

						<label>
							<input type="email" name="email" value="" placeholder="email" required>
						</label><br><br>

						<label>
							<select name="expertise" required>
								<option>-Expert in-</option>
								<option>Medicine</option>
								<option>Heart</option>
								<option>Bone</option>
								<<option>kedney</option>
									<option>Cardiologist</option>
									<option>Plastic Surgeon</option>
									<option>General Physician</option>
									<option>Neurologist</option>
									<option>Fertility doctor</option>
							</select>
						</label><br><br>
						<label>
							<input type="text" name="id" value="" placeholder="id" required>
						</label><br><br>
						<label>
							<input type="text" name="fee" value="" placeholder="Fee" required>
						</label><br><br>

						<label>
							<input type="text" name="userid" value="" placeholder="Userid" required>
						</label><br><br>
						<label>
							<input type="text" name="password" value="" placeholder="Password" required>
						</label><br><br>


						<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Add</button> <br>

					</div> <!-- col-md-12 -->


				</form>
			</div>




		</div>



		<!-- validation and insertion -->


		<?php
		include('config.php');
		if (isset($_POST['submit'])) {


			$sql = "INSERT INTO doctor (name,address,contact,email,expertise,id,fee,userid,password)
							VALUES ('" . $_POST["name"] . "','" . $_POST["address"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "', '" . $_POST["expertise"] . "','" . $_POST["id"] . "','" . $_POST["fee"] . "','" . $_POST["userid"] . "' ,'" . $_POST["password"] . "' )";

			if ($conn->query($sql) === TRUE) {
				echo "<script>location.replace('doctorlogin.php');</script>";
			} else {
				echo "<script>alert('There was an Error')<script>";
			}

			$conn->close();
		}
		?>



		<!-- validation and insertion End-->







	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>






</body>

</html>