<?php

//To Handle Session Variables on This Page
session_start();

<<<<<<< HEAD
<<<<<<< HEAD
if(empty($_SESSION['id_user'])) {
  header("Location: ../index.php");
  exit();
}


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../db.php");

$sql = "SELECT * FROM apply_job_post WHERE id_user='$_SESSION[id_user]' AND id_jobpost='$_GET[id]'";
$result = $conn->query($sql);
if($result->num_rows > 0) 
{
  
  $sql1 = "SELECT * FROM job_post INNER JOIN company ON job_post.id_company=company.id_company WHERE id_jobpost='$_GET[id]'";
  $result1 = $conn->query($sql1);
  if($result1->num_rows > 0) 
  {
    $row = $result1->fetch_assoc();
  }

} else {
  header("Location: index.php");
  exit();
}
=======

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<<<<<<< HEAD
<<<<<<< HEAD
  <title>Job Portal</title>
=======
  <title>Jinjang</title>
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
  <title>Jinjang</title>
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
<<<<<<< HEAD
<<<<<<< HEAD
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="../css/custom.css">
=======
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
<<<<<<< HEAD
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo logo-bg">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>J</b>P</span>
      <!-- logo for regular state and mobile devices -->
<<<<<<< HEAD
<<<<<<< HEAD
      
<span class="logo-lg"><b><?php echo $app_name;?></span>
    </a>
=======
<span class="logo-lg"><b><?php echo $app_name;?></span>    </a>
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
<span class="logo-lg"><b><?php echo $app_name;?></span>    </a>
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
<<<<<<< HEAD
<<<<<<< HEAD
            <a href="../jobs.php">Jobs</a>
          </li>         
=======
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
            <a href="login.php">Login</a>
          </li>
          <li>
            <a href="sign-up.php">Sign Up</a>
          </li>          
<<<<<<< HEAD
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
        </ul>
      </div>
    </nav>
  </header>

<<<<<<< HEAD
<<<<<<< HEAD
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

=======
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007


  <div class="content-wrapper" style="margin-left: 0px;">

  <?php
  
    $sql = "SELECT * FROM job_post INNER JOIN company ON job_post.id_company=company.id_company WHERE id_jobpost='$_GET[id]'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) 
      {
  ?>

<<<<<<< HEAD
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
    <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">          
          <div class="col-md-9 bg-white padding-2">
            <div class="pull-left">
              <h2><b><i><?php echo $row['jobtitle']; ?></i></b></h2>
            </div>
            <div class="pull-right">
<<<<<<< HEAD
<<<<<<< HEAD
              <a href="index.php" class="btn btn-default btn-lg btn-flat margin-top-20"><i class="fa fa-arrow-circle-left"></i> Back</a>
=======
              <a href="jobs.php" class="btn btn-default btn-lg btn-flat margin-top-20"><i class="fa fa-arrow-circle-left"></i> Back</a>
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
              <a href="jobs.php" class="btn btn-default btn-lg btn-flat margin-top-20"><i class="fa fa-arrow-circle-left"></i> Back</a>
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
            </div>
            <div class="clearfix"></div>
            <hr>
            <div>
              <p><span class="margin-right-10"><i class="fa fa-location-arrow text-green"></i> <?php echo $row['city']; ?></span> <i class="fa fa-calendar text-green"></i> <?php echo date("d-M-Y", strtotime($row['createdat'])); ?></p>              
            </div>
            <div>
              <?php echo stripcslashes($row['description']); ?>
            </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
            <?php 
            if(isset($_SESSION["id_user"]) && empty($_SESSION['companyLogged'])) { ?>
            <div>
              <a href="apply.php?id=<?php echo $row['id_jobpost']; ?>" class="btn btn-success btn-flat margin-top-50">Apply</a>
            </div>
            <?php } ?>
<<<<<<< HEAD
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
            
            
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
<<<<<<< HEAD
<<<<<<< HEAD
              <img src="../uploads/logo/<?php echo $row['logo']; ?>" alt="companylogo">
=======
              <img src="uploads/logo/<?php echo $row['logo']; ?>" alt="companylogo">
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
              <img src="uploads/logo/<?php echo $row['logo']; ?>" alt="companylogo">
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
              <div class="caption text-center">
                <h3><?php echo $row['companyname']; ?></h3>
                <hr>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
    <?php 
      }
    }
    ?>

<<<<<<< HEAD
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
    

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
<<<<<<< HEAD
<<<<<<< HEAD
      <strong>Copyright &copy; 2014-2018 <a href=""><?php echo $app_name;?></a>.</strong> All rights
=======
<strong>Copyright &copy; 2014-2018 <a href=""><?php echo $app_name;?></a>.</strong> All rights
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
<strong>Copyright &copy; 2014-2018 <a href=""><?php echo $app_name;?></a>.</strong> All rights
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
    reserved.
    </div>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<<<<<<< HEAD
<<<<<<< HEAD
<script src="../js/adminlte.min.js"></script>
=======
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
<script src="js/adminlte.min.js"></script>



<<<<<<< HEAD
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
=======
>>>>>>> 78374467415fbdbfa4897cb31d69425b25aa4007
</body>
</html>
