<?php
session_start();
include'dbconnection.php';
//Checking session is valid or not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for updating user info
if(isset($_POST['Submit']))
{
  $fname=$_POST['fname'];
	$mname1=$_POST['mname1'];
	$mconta1=$_POST['mconta1'];
	$mlocati1=$_POST['mlocati1'];
  $mname2=$_POST['mname2'];
	$mconta2=$_POST['mconta2'];
	$mlocati2=$_POST['mlocati2'];
  $mname3=$_POST['mname3'];
  $mconta3=$_POST['mconta3'];
  $mlocati3=$_POST['mlocati3'];
  $mname4=$_POST['mname4'];
	$mconta4=$_POST['mconta4'];
	$mlocati4=$_POST['mlocati4'];
  $mname5=$_POST['mname5'];
  $mconta5=$_POST['mconta5'];
  $mlocati5=$_POST['mlocati5'];
  $mname6=$_POST['mname6'];
  $mconta6=$_POST['mconta6'];
  $mlocati6=$_POST['mlocati6'];


  $uid=intval($_GET['uid']);
$query=mysqli_query($con,"update members set fname='$fname' ,mname1='$mname1', 'mconta1='$mconta1', mlocati1='$mlocati1', mname2='$mname2', 'mconta2='$mconta2', mlocati2='$mlocati2',mname3='$mname3', 'mconta3='$mconta3', mlocati3='$mlocati3', mname4='$mname4', 'mconta4='$mconta4', mlocati4='$mlocati4', mname5='$mname5', 'mconta5='$mconta5', mlocati5='$mlocati5', mname6='$mname6', 'mconta6='$mconta6', mlocati6='$mlocati6' where id='$uid'");
$_SESSION['msg']="Profile Updated successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Update U.Members</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">



                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>

                  <li class="mt">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Change Password</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span>Manage Users</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="manage-members.php" >
                          <i class="fa fa-users"></i>
                          <span>Manage U.Members</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="manage-wallets.php" >
                          <i class="fa fa-users"></i>
                          <span>Manage Wallet</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="manage-transactions.php" >
                          <i class="fa fa-users"></i>
                          <span>Manage Transactions</span>
                      </a>

                  </li>

              </ul>
          </div>
      </aside>
      <?php $ret=mysqli_query($con,"select * from members where id='".$_GET['uid']."'");
	  while($row=mysqli_fetch_array($ret))

	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['fname'];?>'s Information</h3>

				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Username </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Name 1</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="mname1" value="<?php echo $row['mname1'];?>" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Contact 1 </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="mconta1" value="<?php echo $row['mconta1'];?>" >
                              </div>
                          </div>

                          <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Location 1</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="mlocati1" value="<?php echo $row['mlocati1'];?>" >
                          </div>
                      </div>

                      <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Name 2</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="mname2" value="<?php echo $row['mname2'];?>" >
                      </div>
                  </div>

                      <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Contact 2 </label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="mconta2" value="<?php echo $row['mconta2'];?>" >
                      </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Location 2</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="mlocati2" value="<?php echo $row['mlocati2'];?>" >
                  </div>
              </div>


              <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Name 3</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="mname3" value="<?php echo $row['mname3'];?>" >
              </div>
          </div>

              <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Contact 3 </label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="mcont3" value="<?php echo $row['mconta3'];?>" >
              </div>
          </div>

          <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Location 3</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="mlocati3" value="<?php echo $row['mlocati3'];?>" >
          </div>
      </div>


      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Name 4</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="mname4" value="<?php echo $row['mname4'];?>" >
      </div>
      </div>

      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Contact 4 </label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="mconta4" value="<?php echo $row['mconta4'];?>" >
      </div>
      </div>

      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Location 4</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="mlocati4" value="<?php echo $row['mlocati4'];?>" >
      </div>
      </div>


      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Name 5</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="mname5" value="<?php echo $row['mname5'];?>" >
      </div>
      </div>

      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Contact 5 </label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="mconta5" value="<?php echo $row['mconta5'];?>" >
      </div>
      </div>

      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Location 5</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="mlocati5" value="<?php echo $row['mlocati5'];?>" >
      </div>
      </div>

      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Name 6</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="mname6" value="<?php echo $row['mname6'];?>" >
      </div>
      </div>

      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Contact 6 </label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="mconta6" value="<?php echo $row['mconta6'];?>" >
      </div>
      </div>

      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Member Location 6</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="mlocati6" value="<?php echo $row['mlocati6'];?>" >
      </div>
      </div>



                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
        <?php } ?>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>
