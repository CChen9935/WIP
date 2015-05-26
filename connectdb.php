<!DOCTYPE HTML>
<html>
	<head>
		<style>
			body{background-image:url('upfeathers.png');}
			.eFake{font-size:100px;font-family:impact;font-style:italic;font-weight:bold;color:red;}
			sub{color:green;}
			.titles{font-weight:bold;font-size:50px;font-family:georgia;}
			input{font-size:25px;font-size:25px;text-align:relative;margin-left:40%;}
			#register{margin-left:70%;}
			a{color:blue;}
		</style>
		<title>eFake: Online Shopping for Electronic Parts</title>
	</head>
	<body>
		<!--UNFINISHED AND NEED ONCLICK TO VIEW INFO -->
		<?php
		$hostname = "localhost";
		$dbname = "efake";
		$uname = "root";
		$pword = "";
		$conn = new PDO("mysql:host=".$hostname.";dbname=".$dbname,$uname,$pword);
		$hotcmd ="SELECT Image FROM products ORDER BY Stock";
		$newcmd ="SELECT Image FROM products ORDER BY Price DESC";
		$freqcmd = "SELECT Image FROM products ORDER BY ID";
		?>
		<!-- Top -->
		<div>
		<form method = "get" action = "Chieh-Huang Chen WIP Content.html">
		<span class = "eFake"><sub>e</sub>Fake</span><span id = "register"><a href = "Chieh-Huang Chen WIP Creating Account.html">Register</a>|<a>Login</a></span></br>
		<input type ="search" name ="value" id = "textinput" placeholder="Search..."></input>
		</form>
		</div>
		<!-- Types -->
		<div>
		</div>
		<!-- Hot Sales -->
		<div class = "titles">
			Hottest Sales
		</div>
		<div id = "hottable">
		<table>
			<tr>
				<?php
				$statement = $conn->prepare($hotcmd);
				$statement->execute();
				//$data=$statement->fetchAll(PDO::FETCH_ASSOC);
				$hotdata0=$statement->fetch();
				$hotdata0 = "ProductPics/" . $hotdata0[0] .".png";
				$hotdata1 =$statement->fetch();
				$hotdata1 = "ProductPics/" . $hotdata1[0] .".png";
				$hotdata2 =$statement->fetch();
				$hotdata2 ="ProductPics/" . $hotdata2[0] .".png";
				echo "<td><img src = '$hotdata0'/></td><td><img src = '$hotdata1'/></td><td><img src = '$hotdata2'/></td>";
				?>
			</tr>
		</table>
		</div>
		<!-- New Sales -->
		<div class = "titles">
			Newest Sales
		</div>
		<div id ="newtable">
		<table>
			<tr>
				<?php
				$statement = $conn->prepare($newcmd);
				$statement->execute();
				//$data=$statement->fetchAll(PDO::FETCH_ASSOC);
				$newdata0=$statement->fetch();
				$newdata0 = "ProductPics/" . $newdata0[0] .".png";
				$newdata1 =$statement->fetch();
				$newdata1 = "ProductPics/" . $newdata1[0] .".png";
				$newdata2 =$statement->fetch();
				$newdata2 ="ProductPics/" . $newdata2[0] .".png";
				echo "<td><img src = '$newdata0'/></td><td><img src = '$newdata1'/></td><td><img src = '$newdata2'/></td>";
				?>
			</tr>
		</table>
		</div>
		<!-- Frequently Searched -->
		<div class ="titles">
			Frequently Searched
		</div>
		<div id ="frequtable">
		<table>
			<tr>
				<?php
				$statement = $conn->prepare($freqcmd);
				$statement->execute();
				//$data=$statement->fetchAll(PDO::FETCH_ASSOC);
				$freqdata0=$statement->fetch();
				$freqdata0 = "ProductPics/" . $freqdata0[0] .".png";
				$freqdata1 =$statement->fetch();
				$freqdata1 = "ProductPics/" . $freqdata1[0] .".png";
				$freqdata2 =$statement->fetch();
				$freqdata2 ="ProductPics/" . $freqdata2[0] .".png";
				echo "<td><img src = '$freqdata0'/></td><td><img src = '$freqdata1'/></td><td><img src = '$freqdata2'/></td>";
				?>
			</tr>
		</table>
		</div>
	</body>
</html>