<!DOCTYPE HTML>
<!-- Chieh-Huang Chen -->
<html>
	<head>
		<title>
		</title>
		<style>
			body{background-image:url('upfeathers.png');display:inline-block;font-size:40px;margin-left:5%;}
			.eFake{font-size:100px;font-family:impact;font-style:italic;font-weight:bold;color:red;}
			sub{color:green;}
			input{font-size:25px;font-size:25px;text-align:relative;margin-left:10%;}
			span{text-align:relative;margin-left:10%;display:inline-block;}
		</style>
	</head>
	<body>
	<form method = "post" action = "Chieh-Huang Chen WIPHP Content.php">
		<span class = "eFake"><sub>e</sub>Fake</span>
		<input type ="search" name ="searchquery" id = "textinput" placeholder="Search..."></input>
	</form>
	<?php
	
	if(empty($_POST['nextitems']))
		$i = 0;
	else
		$i = $_POST['nextitems'];
	
	$querystring = $_POST['searchquery'];
	$querystring = "%".$querystring."%";
	$hostname = "localhost";
	$dbname = "efake";
	$uname = "root";
	$pword = "";
	$conn = new PDO("mysql:host=".$hostname.";dbname=".$dbname,$uname,$pword);
	
	$searchcmd = "SELECT * FROM products WHERE Name LIKE '$querystring'";
	$statement = $conn->prepare($searchcmd);
	$statement->execute();
	$data=$statement->fetchAll(PDO::FETCH_ASSOC);
	
	for($nx=$i;$nx<$i+10;$nx++)
	{
		if(empty($data[$nx]))
			break;
			
		$dataimg ="ProductPics/". $data[$nx]['Image'] . ".png";
		$dataname = $data[$nx]['Name'];
		$datadesc = $data[$nx]['Description'];
		$datadescarray = explode(";",$datadesc);
		echo "<div style='margin-bottom:10%;'>";
		echo "<span style='width:20%;'>";
		echo "<img src='$dataimg'/>";
		echo "</span><span style='width:60%;'>";
		echo "<div>$dataname</div></br>";
		for($y=0;$y<count($datadescarray);$y++)
			echo "<li style = 'font-size:20px'>$datadescarray[$y]</li>";
		echo "</span>";
		echo "</div>";
	}
	echo "<form>";
	if($data[$nx-11])
	{
		$nx = $nx-11;
		echo "<input type = ''></input>";
	}
	if($data[$nx+1])
	{
		$nx = $nx+1;
		echo "<input type = ''></input>";
	}
	echo "<input type ='hidden' name= 'searchquery' value ='$querystring'></input>";
	echo "<input type ='hidden' name= 'nextitems' value ='$nx'></input>";
	echo "</form>";
	?>
	</body>
</html>