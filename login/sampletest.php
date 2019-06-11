<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
 </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?php
session_start();
echo $_SESSION['username'];
?></a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="index.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8 grid-margin stretch-card p-5">
							
								<div class="card-body">
									<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
										<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
											<div class="table-responsive">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th><b>S.Number</b></th>
          <th><b>Project Title</b></th>
		  <th><b>Project Description</b></th>
		</tr>
      </thead>
      <tbody>
	  <?php 
	  $connect=mysql_connect("localhost","root","");
		mysql_select_db('signup');
		$id=$_POST['id'];
	  $query="select * from description where sno=$id ";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
	?>
	<tr>
	<td><input type="text" name="id" value="<?php echo $row['sno'];?>"></td>
	<td><input type="text" name="uname" value="<?php echo $row['name'];?>"></td>
	<td><input type="text" name="udes" value="<?php echo $row['des'];?>"></td>
	</tr>
	<?php
	}
?>
 </tbody>
    </table>
	  <input type="button" name="update" value="Update" class="btn btn-primary"> 
	<input type="button" m-5 name="cancel" value="Cancel" class="btn btn-primary">
  </div>
  </div>
  </div></div></div>
						</div></div>
						
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons@4.21.0/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
  </body>
</html>