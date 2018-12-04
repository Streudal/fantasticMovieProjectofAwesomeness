<html>
<head>
<h1>
My Cool Landing Page
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

$result = mysqli_query($con, "SELECT * FROM Lists WHERE UserID="$_SESSION['userid']"");?>
<h1>
My Cool Lists
</h1>
<br>
<?php
$f1=mysqli_results($result, 0, "listName");
$f2=mysqli_results($result, 0, "listID");
$f3=mysqli_results($result, 1, "listName");
$f4=mysqli_results($result, 1, "listID");?>
<h2>
My Cool Movie List
</h2>
<br>
<a href="/list.php?listname=<?php echo $f2; ?>"><?php echo $f1; ?></a>
<br>
<h2>
My Cool Wish List
</h2>
<br>
<a href="list.php?listname=<?php echo $f4; ?>"><?php echo $f3; ?></a>
<br>
</body>