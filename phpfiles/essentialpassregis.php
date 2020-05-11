<?php
		include('../phpfiles/db.php');
		if (isset($_POST['submit'])) {

			$sql1 = "SELECT * FROM essential WHERE email='" . $_POST["email"] . "' ";
			$result = $conn->query($sql1);
			if ($result->num_rows > 0) {
				echo "<script>alert('Sorry, user already exist!');</script>";
			} else {
				$sql = "INSERT INTO patient (email,name,aadhar,vnum,trip,start,end,gender,account,reason)
							VALUES ('" . $_POST["email"] . "','" . $_POST["name"] . "','" . $_POST["aadhar"] . "','" . $_POST["vnum"] . "','" . $_POST["trip"] . "', '" . $_POST["start"] . "','" . $_POST["end"] . "','" . $_POST["gender"] . "','" . $_POST["account"] . "','" . $_POST["reason"] . "' )";

				if ($conn->query($sql) === TRUE) {
					echo "<script>alert('Registeration Successful');</script>";
				} else {
					echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
				}

				$conn->close();
			}
		}
		?>


