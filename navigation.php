<div class="primary">
	<nav class="master">
		<input type="checkbox" name="sec1" id="toggle" >
		<div class="grid-toggle">
			<div><img src="images/logo.png"></div>
			<div class="label-div"><label id="toggle-l" for="toggle">&#9776;</label></div>
		</div>
		<div class="content">
			<ul>
				<?php   

				$query="SELECT  * FROM nav_table";
				$result=$conn->query($query);

				while($row = $result->fetch_assoc())
				{
					$nav_title= $row['nav_title'];

					echo "<li> <a href=''> $nav_title </a></li>";


				}
				?>






			</ul>
		</div>



	</nav>
</div>