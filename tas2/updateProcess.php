<?PHP
	require ('config.php');

	if (isset($_POST['idTeacher'])){
	$idTeacher = $_POST['idTeacher'];
	$nameTeacher = $_POST['nameTeacher'];
	$pwd = $_POST['pwd'];
	$iduser = $_POST['iduser'];

	$sql = "UPDATE teacher SET iduser='$idTeacher', fullname='$nameTeacher', password='$pwd'  WHERE iduser = '$iduser'";
	if(mysqli_query($link, $sql)){
		echo '<script type="text/javascript">
					alert("Rekod berjaya dikemaskini");
					window.location.href="teacherList.php";
			 </script>';
			//header("Location: teacherList.php");  window.location.href="teacherList.php";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	}
	mysqli_close($link);
?>