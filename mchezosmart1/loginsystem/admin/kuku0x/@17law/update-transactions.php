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
	$tamount1=$_POST['tamount1'];
	$tdate1=$_POST['tdate1'];
	$ttrans1=$_POST['ttrans1'];
  $tamount2=$_POST['tamount2'];
  $tdate2=$_POST['tdate2'];
  $ttrans2=$_POST['ttrans2'];
  $tamount3=$_POST['tamount3'];
  $tdate3=$_POST['tdate3'];
  $ttrans3=$_POST['ttrans3'];
  $tamount4=$_POST['tamount4'];
	$tdate4=$_POST['tdate4'];
	$ttrans4=$_POST['ttrans4'];
  $tamount5=$_POST['tamount5'];
	$tdate5=$_POST['tdate5'];
	$ttrans5=$_POST['ttrans5'];
  $tamount6=$_POST['tamount6'];
	$tdate6=$_POST['tdate6'];
	$ttrans6=$_POST['ttrans6'];


  $uid=intval($_GET['uid']);
$query=mysqli_query($con,"update transactions set fname='$fname' ,tamount1='$tamount1', tdate1='$tdate1', ttrans1='$ttrans1', tamount2='$tamount2', tdate2='$tdate2', ttrans2='$ttrans2',tamount3='$tamount3', tdate3='$tdate3', ttrans3='$ttrans3', tamount4='$tamount4', tdate4='$tdate4', ttrans4='$ttrans4', tamount5='$tamount5', tdate5='$tdate5', ttrans5='$ttrans5', tamount6='$tamount6', tdate6='$tdate6', ttrans6='$ttrans6' where id='$uid'");
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

    <title>Admin | Update Transactions</title>
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
      <?php $ret=mysqli_query($con,"select * from transactions where id='".$_GET['uid']."'");
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
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Amount 1</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="tamount1" value="<?php echo $row['tamount1'];?>" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Date 1 </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="tdate1" value="<?php echo $row['tdate1'];?>" >
                              </div>
                          </div>

                          <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Code 1</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="ttrans1" value="<?php echo $row['ttrans1'];?>" >
                          </div>
                      </div>

                      <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Amount 2</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="tamount2" value="<?php echo $row['tamount2'];?>" >
                      </div>
                  </div>

                      <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Date 2</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="tdate2" value="<?php echo $row['tdate2'];?>" >
                      </div>
                  </div>

                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Code 2</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="ttrans2" value="<?php echo $row['ttrans2'];?>" >
                  </div>
              </div>


              <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Amount 3</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="tamount3" value="<?php echo $row['tamount3'];?>" >
              </div>
          </div>

              <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Date 3</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="tdate3" value="<?php echo $row['tdate3'];?>" >
              </div>
          </div>

          <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Code 3</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="ttrans3" value="<?php echo $row['ttrans3'];?>" >
          </div>
      </div>


      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Amount 4</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="tamount4" value="<?php echo $row['tamount4'];?>" >
      </div>
  </div>

      <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Date 4</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="tdate4" value="<?php echo $row['tdate4'];?>" >
      </div>
  </div>

  <div class="form-group">
  <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Code 4</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" name="ttrans4" value="<?php echo $row['ttrans4'];?>" >
  </div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Amount 5</label>
<div class="col-sm-10">
    <input type="text" class="form-control" name="tamount5" value="<?php echo $row['tamount5'];?>" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Date 5</label>
<div class="col-sm-10">
    <input type="text" class="form-control" name="tdate5" value="<?php echo $row['tdate5'];?>" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Code 5</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="ttrans5" value="<?php echo $row['ttrans5'];?>" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Amount 6</label>
<div class="col-sm-10">
    <input type="text" class="form-control" name="tamount6" value="<?php echo $row['tamount6'];?>" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Date 6</label>
<div class="col-sm-10">
    <input type="text" class="form-control" name="tdate6" value="<?php echo $row['tdate6'];?>" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tran. Code 6</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="ttrans6" value="<?php echo $row['ttrans6'];?>" >
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
