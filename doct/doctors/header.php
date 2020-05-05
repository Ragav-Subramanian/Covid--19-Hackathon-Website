<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Covid 19</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
	<style type="text/css">
		ul {
			margin: 0px;
			padding: 0px;
			list-style: none;
		}

		ul li {
			float: left;
			width: 150px;
			height: 40px;
			background-color: #4ADA75;
			opacity: 1;
			line-height: 40px;
			text-align: left;
			font-size: 15px;
			margin-right: 2px;
		}

		ul li a {
			text-decoration: none;
			color: white;
			display: block;
		}

		ul li a:hover {
			background-color: white;
			display: block;
		}

		ul li ul li {
			display: none;
		}

		ul li:hover ul li {
			display: block;
		}

		body {
			background: url(../stayhome.jpeg);
			background-size: cover;
		}
	</style>
	<ul>

		<li><a href="myAppoinment.php">My Appoinment</a></li>
		<li><a href="myDetails.php">My Details</a></li>
		<li><a href="../patient/logout.php">Logout</a></li>
	</ul>
</body>
