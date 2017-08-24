<?php
	

	function display_duty(){
		$sql= "SELECT * FROM roster WHERE done= 1";
		require"connect.php";
		$results= mysqli_query($con, $sql);
		echo "<div >
				<span class='done'>";

		while($row=mysqli_fetch_assoc($results))
		{
			
			echo "<label> {$row['student']} is to {$row['duty']} &nbsp <img src='good.png' class='img_good'/></label> <br>";
			
		}
		echo " </span></div> <br> <br>";
		
		$sql= "SELECT * FROM roster WHERE done = 0";
		
		$results= mysqli_query($con, $sql);
		while($row=mysqli_fetch_assoc($results))
		{
			$var = $row['id'];
			echo "<form action='/movement/school-roster/logics/save_duty.php' method='POST'>";
			echo "<label> {$row['student']} is to {$row['duty']}</label>";
			echo "<input type='radio' name='done' value='{$var}'>";
			echo " <input type='submit' class='myButton' value='Go'> </form> <br>";
		}
	}

	function done($done){
		$sql = "UPDATE roster SET done = 1 WHERE id = {$done}";
			require"connect.php";
			$result= mysqli_query($con, $sql);

			header("location:/movement/school-roster/check.php");
	}
?>