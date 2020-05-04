<?php if (!isset($_SESSION)) {
	session_start();
}
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>
<!-- this is for donor registraton -->
<div class="search">
	<h3 class="text-center" style="background-color:#4ADA75;color: #fff;padding: 5px;">Search Here</h3>

	<div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 400px;">
		<form action="search_result.php" method="post" class="form-group">



			<label>
				Category:<select name="expertise" type="text" style="width: 110px;margin-right: 175px;" />
				<option>-Select-</option>
				<option>Medicine</option>
				<option>Heart</option>
				<option>Bone</option>
				<option>Neurologist</option>
				<option>Fertility doctor</option>
				<option>Cardiologist</option>
				<option>Plastic Surgeon</option>
				<option>General Physician</option>
				</select>

			</label>
			<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
			<br>

		</form>




	</div>
</div>
</div><!--  containerFluid Ends -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>