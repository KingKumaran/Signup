<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12"></div>
<div class="col-md-4 col-sm-4 col-xs-12">
<form class="form-container  bg" method="post">
  <div class="form-group">
  <h2 align="center">Login</h2>
    <label for="Usern Name">User Name</label>
    <input type="text" name="ulname" class="form-control" placeholder="User Name">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" name="plass" class="form-control" placeholder="Password">
  </div>
  <br>
  <div class="form-group">
  <input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
  </div>
  </form>
</div>
<div class="col-md-4 col-sm-4 col-xs-12"></div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

  </html>
  <?php
  session_start();
$connect=mysql_connect("localhost","root","");
mysql_select_db('signup');
if(isset($_POST['login']))
{
if(empty($_POST['ulname']) || empty($_POST['plass']))
{

echo "<script>alert('Fill all the Details');</script>";
}
else
{
	$luname=$_POST["ulname"];
	$lpass=$_POST["plass"];
$query=mysql_query("select * from logtable where uname='$luname' and pass='$lpass'");
//$dname=$_REQUEST['fname'];
$rowcount=mysql_num_rows($query);
$row=mysql_fetch_array($query);
if($rowcount==true)
{
	//$dname=mysql_query("select uname from logtable where uname='$luname and pass='$lpass'");
$_SESSION['username']=$row['fname'];
header('location:dashboard.php');
}
else{
	echo "<script>alert('Wrong Username Or Password');</script>";
}
}
}
?>