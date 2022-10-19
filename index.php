<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<?php 
		include "functions.php";
		if (isset($_POST["submit"])) 
			{
				$ban=$_POST["ban"];
				$eng=$_POST["eng"];
				$mat=$_POST["mat"];
				$phy=$_POST["phy"];
				if($ban=="")
					$ban=0;
				if($eng=="")
					$eng=0;
				if($mat=="")
					$mat=0;
				if($phy=="")
					$phy=0;

				
				if($ban >=33 && $ban < 40){
					$rban = "D";
				}
				else
				$rban = Grade($ban);

				if($eng >=33 && $eng < 40){
					$reng = "D";
				}
				else
				$reng = Grade($eng);

				if($mat >=33 && $mat < 40){
					$rmat = "D";
				}
				else
				$rmat = Grade($mat);

				if($phy >=33 && $phy < 40){
					$rphy = "D";
				}
				else
				$rphy = Grade($phy);
			}
	?>
		
		<table border="1 px solid black">
			<form method="POST">
				<tr>
					<td>
						Bangla: <input type="text" name="ban" value="<?php if (isset($_POST['submit'])) {echo $ban;}?>">
					</td>
					<td>
						English: <input type="text" name="eng" value="<?php if (isset($_POST['submit'])) {echo $eng;}?>">
					</td>
					<td>
						Math: <input type="text" name="mat" value="<?php if (isset($_POST['submit'])) {echo $mat;}?>">
					</td>
					<td>
						Physics: <input type="text" name="phy" value="<?php if (isset($_POST['submit'])) {echo $phy;}?>">
					</td>
					<td rowspan="2">
						<button  name="submit" class="btn btn-outline-secondary">Result</button>
					</td>

				</tr>
				<tr>
					<td>Bangla Grad: <?php if (isset($_POST['submit'])) {echo $rban;}?></td>
					<td>English Grad: <?php if (isset($_POST['submit'])) {echo $reng;}?></td>
					<td>Math Grad: <?php if (isset($_POST['submit'])) {echo $rmat;}?></td>
					<td>Physics Grad: <?php if (isset($_POST['submit'])) {echo $rphy;}?></td>
				</tr>
			</form>
		</table>

<script src="scripts.js"></script>
</body>
</html>