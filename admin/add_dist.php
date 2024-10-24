
<?php
include '../dbconnection.php';
ob_start();
session_start();
$usr=$_SESSION['admin'];
$mid=$_GET['mid'];
?>
<?php

if($usr=$_SESSION['admin'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>
<?php

if (isset($_POST['b1'])) {
     $t1=$_POST['t1'];
     $t2=$_POST['t2'];
     $t3=$_POST['t3'];
     $t4=$_POST['t4'];
     $t5=$_POST['t5'];
     $t6=$_POST['t6'];
    
    $ins_grp1=mysqli_query($dbcon,"insert into dis_admin values('','$mid','$t1','$t2','$t3','$t4','$t5','$t6','0')");
    if($ins_grp1>0)
    {
      $ins=mysqli_query($dbcon,"insert into user_log values('','$t5','$t6','dist','1')");
    if($ins>0)
    { 
          
      header("location:add_dist.php?mid=$mid");     

       }
       
    }
    else
    {
    echo mysqli_error($dbcon);
    }
}
?>
<?php
                            if(isset($_GET['del']))
{
    $del1=mysqli_query($dbcon,"delete from ser where id='".$_GET['del']."'");
    //echo mysqli_error($dbcon);
    if($del1>0)
    {
       header("location:add_zone.php");
}
}
  


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admincast bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Form Advanced Plugins</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="../ad_temp/./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../ad_temp/./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../ad_temp/./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="../ad_temp/./assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="../ad_temp/./assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link href="../ad_temp/./assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="../ad_temp/./assets/vendors/jquery-minicolors/jquery.minicolors.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="../ad_temp/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <?php
      include 'menu.php';
        ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Add District Admin</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../ad_temp/index.html"><i class="la la-home font-20"></i></a>
                    </li>
                  
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                
                            </div>
                            <div class="ibox-body">
                                <form method="post">
                                
                                <div class="form-group">
                                    <label class="form-control-label">District</label>
                                    <select class="form-control select2_demo_1"name="t1">
                                        <optgroup label="District of India">
                                           
                                        <option value="">Choose One</option>
                                        <?php
                                        $sel_state=mysqli_query($dbcon,"select * from district where StCode='$mid'");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[2] ?>"><?php echo $r_state[2] ?></option>
                                       <?php
                                           }
                                        ?>
                                   
                                        </optgroup>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                        <label>District Controller</label>
                                        <input class="form-control" type="text"name="t2" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Pincode</label>
                                        <input class="form-control" type="text"name="t3" placeholder="Pincode">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact</label>
                                        <input class="form-control" type="text"name="t4" placeholder="Contact info">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text"name="t5" placeholder="eg@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password"name="t6" placeholder="********">
                                    </div>
                                <div class="form-group">
                                        <button class="btn btn-default" name="b1" type="submit">Submit</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="ibox">
                        
                        
                            <img style="width: 100%;height: 570px" src="../gif/7df26fa959d20fa16bf8223205cd949b.gif">
                        </div>
                    </div>
                </div>
                <div>
                    
                        
                        
                    
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="../ad_temp/http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="../ad_temp/./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="../ad_temp/./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="../ad_temp/./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../ad_temp/./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="../ad_temp/./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="../ad_temp/./assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../ad_temp/./assets/vendors/jquery-knob/dist/jquery.knob.min.js" type="text/javascript"></script>
    <script src="../ad_temp/./assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="../ad_temp/./assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="../ad_temp/./assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="../ad_temp/./assets/vendors/jquery-minicolors/jquery.minicolors.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="../ad_temp/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="../ad_temp/./assets/js/scripts/form-plugins.js" type="text/javascript"></script>
</body>

</html>