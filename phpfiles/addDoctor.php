<?php session_start();  ?>

<!DOCTYPE html>
<html>

<head>
	<title>Doctor registration form</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<style>
		html,
		body {
			display: flex;
			justify-content: center;
			height: 100%;
		}

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
			max-width: 500px;
			min-height: 600px;
			padding: 10px 0;
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
			width: 60%;
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
		<h1>Doctor Registration</h1>
		<form action="" method="post" target="_blank">

			<label id="icon" for="name"><i class="fas fa-user"></i></label>
			<input type="text" name="name" value="" id="name" placeholder="Full name" required>
			<label id="icon" for="name"><i class="fas fa-car"></i></label>
			<input type="text" name="address" value="" id="name" placeholder="address" required>
			<label id="icon" for="name"><i class="fas fa-pen"></i></label>
			<input type="text" name="contact" value="" id="name" placeholder="contact" required>
			<label id="icon" for="name"><i class="fas fa-envelop"></i></label>
			<input type="email" name="email" value="" id="name" placeholder="email" required>
			
			<label id="icon" for="name"><i class="fas fa-pen"></i></label>
			<select name="expertise" id="name" required>
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
			<label id="icon" for="name"><i class="fas fa-user"></i></label>
			<input type="text" name="id" value="" placeholder="id" required>
			<label id="icon" for="name"><i class="fas fa-pen"></i></label>
			<input type="text" name="fee" value="" placeholder="Fee" required>
			<label id="icon" for="name"><i class="fas fa-user"></i></label>
			<input type="text" name="userid" value="" placeholder="Userid" required>
			<label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
			<input type="text" name="password" value="" placeholder="Password" required>
			<br>
			<div class="btn-block">
				<button name="submit" type="submit">Add</button> <br>

			</div>
		</form>
		<?php
		include('../phpfiles/db.php');
		if (isset($_POST['submit'])) {
			$sql = "INSERT INTO doctor (name,address,contact,email,expertise,id,fee,userid,password)
		VALUES ('" . $_POST["name"] . "','" . $_POST["address"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "', '" . $_POST["expertise"] . "','" . $_POST["id"] . "','" . $_POST["fee"] . "','" . $_POST["userid"] . "' ,'" . $_POST["password"] . "' )";
			if ($conn->query($sql) === TRUE) {
				echo "<script>location.replace('../phpfiles/doctorlogin.php');</script>";
			} else {
				echo "<script>alert('There was an Error')<script>";
			}
			$conn->close();
		}
		?>
		<script src="../js/bootstrap.min.js"></script>
	</div>
</body>

</html>