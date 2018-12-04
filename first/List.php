<html>
<head>
<h1>
My Cool List 
</h1>
<LINK rel=stylesheet type="text/css" href="/style.css">
</head>
<body>
<?php
$con=mysqli_connect("localhost","my_user","my_password","mydatabase");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $result = mysqli_query($con, "SELECT * FROM entries WHERE ListID=$_GET["listID"]");
 $descriptiveVariableName=mysqli_num_rows($result);?>
<table border = "0" cellspacing = "2" cellpadding = "2">
<tr>
<td>
<font face="Times New Roman, Helvetica, sans-serif">MovieID</font>
</td>
<td>
<font face="Times New Roman, Helvetica, sans-serif">Title</font>
</td>
<td>
<font face="Times New Roman, Helvetica, sans-serif">Year</font>
</td>
<td>
<font face="Times New Roman, Helvetica, sans-serif">Language</font>
</td><td>
<font face="Times New Roman, Helvetica, sans-serif">Runtime</font>
</td>
</tr>
<?php
$i = 0;
while ($i < $descriptiveVariableName) {
	$f1=mysqli_results($result,$i,"movieID");
	$f2=mysqli_results($result,$i,"movieTitle");
	$f3=mysqli-_results($result,$i,"movieReleaseYear");
	$f4=mysqli-_results($result,$i,"movieLanguage");
	$f5=mysqli_results($result,$i,"movieRuntime");?>
	<tr>
	<td>
	<font face = "Times New Roman, Helvetica, sans-serif"><?php echo $f1; ?></font>
	</td>
	<td>
	<font face = "Times New Roman, Helvetica, sans-serif"><?php echo $f2; ?></font>
	</td>
	<td>
	<font face = "Times New Roman, Helvetica, sans-serif"><?php echo $f3; ?></font>
	</td>
	<td>
	<font face = "Times New Roman, Helvetica, sans-serif"><?php echo $f4; ?></font>
	</td>
	<td>
	<font face = "Times New Roman, Helvetica, sans-serif"><?php echo $f5; ?></font>
	</td>
	</tr>
	<?php
	$i++;
}?>
</body>
</html>