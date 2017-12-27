<?php
	require('config.php');
		
		// If form submitted, insert values into the database.
	if (isset($_POST['idTeacher'])){
			
			//removes backslashes
			$idTeacher = $_POST['iduser'];
			//$idTeacher = mysqli_real_escape_string($link, $idTeacher);
			
			$nameTeacher = stripslashes($_POST['fullname']);
			//$nameTeacher = mysqli_real_escape_string($link, $nameTeacher);
			
			$pwd = stripslashes($_POST['password']);
			//$pwd = mysqli_real_escape_string($link, $pwd);
			
			//Checking is user existing in the database or not
			$query = "UPDATE teacher SET iduser = $idTeacher, fullname = $nameTeacher, password = $pwd WHERE iduser = $iduser" ;
			
			$result = mysqli_query($link, $query);
			$rows = mysqli_num_rows($result);

			if($rows == 1){
				
				if(mysqli_query($link, $sql)){
					echo '<script type="text/javascript">
							alert("Kehadiran masuk berjaya direkod.");
							window.location.href="teacherList.php";
						 </script>';
				} else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
				// Redirect user to index.php
				//header("Location: dashboard.php");
			}
			
			else{
				echo "<h3>Username/password is incorrect.</h3>
					  <br/>Click here to <a href='login.php'>Login</a></div>";
			}
    }
?>