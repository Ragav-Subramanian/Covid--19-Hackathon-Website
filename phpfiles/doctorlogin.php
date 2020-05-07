<?php session_start();  ?>
<html>
<head>
	<title>Doctor Login</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<style>
		body,
		div,
		h1,
		form,
		input,
		p {
			padding: 0;
			margin: 0;
			outline: none;
			font-family: Roboto, Arial, sans-serif;
			font-size: 16px;
			color: #666;
		}

		h1 {
			padding: 10px 0;
			font-size: 32px;
			color: #4ADA75;
			font-weight: 300;
			text-align: center;
		}

		p {
			font-size: 12px;
		}

		hr {
			color: #a9a9a9;
			opacity: 0.3;
		}

		.main-block {
			max-width: 340px;
			min-height: 360px;
			padding: 30px 0;
			margin: auto;
			border-radius: 5px;
			border: solid 1px #ccc;
			box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
			background: #ebebeb;
		}

		form {
			margin: 0 30px;
		}

		label#icon {
			margin: 0;
			border-radius: 5px 0 0 5px;
		}


		input[type=text],
		input[type=password] {
			width: calc(100% - 57px);
			height: 36px;
			margin: 13px 0 0 -5px;
			padding-left: 10px;
			border-radius: 0 5px 5px 0;
			border: solid 1px #cbc9c9;
			box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
			background: #fff;
		}

		input[type=password] {
			margin-bottom: 15px;
		}

		#icon {
			display: inline-block;
			padding: 9.3px 15px;
			box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
			background: #4ADA75;
			color: #fff;
			text-align: center;
		}

		.btn-block {
			margin-top: 10px;
			text-align: center;
		}

		button {
			width: 100%;
			padding: 10px 0;
			margin: 10px auto;
			border-radius: 5px;
			border: none;
			background: #4ADA75;
			font-size: 14px;
			font-weight: 600;
			color: #fff;
		}

		button:hover {
			background: rgb(45, 180, 85);
		}
	</style>
</head>

<body>
	<div class="main-block">
		<form action="" method="post">

			<hr>
			<label id="icon" for="name"><i class="fas fa-pen"></i></label>
			<input type="text" name="userid" id="name" placeholder="Userid" required />
			<label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
			<input type="password" name="password" id="name" placeholder="Password" required />
			<hr>
			<div class="btn-block">
				<button type="submit" name="submit">submit</button>
			</div>
			<span style="color:#0000FF">Not a member yet?</span> <a href="../phpfiles/addDoctor.php" title="create a account" target="" style="color:#0000FF">&nbsp;Register</a> <br>



			<!-- login validation -->
			<?php
			$_SESSION['doctor'] = "";

			include('../phpfiles/db.php');
			if (isset($_POST["submit"])) {

				$sql = "SELECT * FROM doctor WHERE userid= '" . $_POST["userid"] . "' AND password= '" . $_POST["password"] . "'";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					$_SESSION["userid"] = $_POST["userid"];
					// $_SESSION["type"]=$result[2];
					$_SESSION['doctor'] = "yes";
					echo "<script>location.replace('../phpfiles/dashboard.php');</script>";
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
	<script src="../js/bootstrap.min.js"></script>
</body>

</html>