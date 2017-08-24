<?php 
	if (isset($_POST['done']))
	{
		if(!empty($_POST['done']))
	{
		require"functions.php";
		done($_POST['done']);
	}
		else
		{
			echo "Please select a task before submiting";
		}
	}
	else{
			if(empty($_POST['student1']) ||empty($_POST['duty1']) 
				|| empty($_POST['student2']) ||empty($_POST['duty2'])
				|| empty($_POST['student3']) ||empty($_POST['duty3'])
				|| empty($_POST['student4']) ||empty($_POST['duty4'])
				|| empty($_POST['student5']) ||empty($_POST['duty5']))
			{
				die("please fill in all inputs");
			}

			$student1 = $_POST['student1'];
			$duty1 = $_POST['duty1'];
			$student2= $_POST['student2'];
			$duty2 = $_POST['duty2'];
			$student3= $_POST['student3'];
			$duty3 = $_POST['duty3'];
			$student4= $_POST['student4'];
			$duty4 = $_POST['duty4'];
			$student5= $_POST['student5'];
			$duty5 = $_POST['duty5'];

			$sql = "INSERT INTO roster (student, duty)
								VALUES ('$student1', '$duty1'),
								 ('$student2', '$duty2'),
								 ('$student3', '$duty3'),
								 ('$student4', '$duty4'),
								 ('$student5', '$duty5')";
			require"connect.php";
			$result= mysqli_multi_query($con, $sql);
			header("location:/movement/school-roster/check.php");
		}



?>