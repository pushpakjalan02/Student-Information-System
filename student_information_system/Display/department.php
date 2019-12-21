<HTML>

<HEAD>
	<TITLE>Tezpur University > Departments</TITLE>
	<LINK rel="stylesheet" href="style.css">
</HEAD>

<BODY>
<br /><br />
<H1 align = 'center'>Departments:</H1>
<br />
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student_information_system";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn -> connect_error){
		die("Connection Failed: ". $conn->connect_error);
	}

	$sql = "SELECT * from department";
	$result = $conn -> query($sql);

	if($result -> num_rows > 0){
		echo "<table align = 'center'>";
			echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>ID</th>";
				echo "<th>School</th>";
				echo "<th>Contact No.</th>";
				echo "<th>E-mail</th>";
			echo "</tr>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
				echo "<td align = 'center'>" . $row["NAME"]. "</td>";
				echo "<td align = 'center'>" . $row["ID"] . "</td>";
				echo "<td align = 'center'>" . $row["SCHOOL_NAME"] . "</td>";
				echo "<td align = 'center'>" . $row["PHONE_NO"] . "</td>";
				echo "<td align = 'center'>" . $row["EMAIL"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";	
	}
	else{
		echo "No Data Found";
	}
	$conn->close();
?>
</BODY>
</HTML>