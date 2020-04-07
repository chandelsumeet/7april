
<?php include("header.php"); 
include("db.php");

include("function.php");
?>

<div class="grid2">
<!--navigation-->
<?php  include("navigation.php") ?>


<!--login system-->

<div>

<?php check(); ?>

	<form action="index.php" method="post">

		<input type="text" name="username" placeholder="enter username">
		<input type="password" name="password" placeholder="enter password">
		<input type="submit" name="submit">
		
	</form>
	
</div>





</div>

</body>
</html>