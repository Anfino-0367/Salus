
<?php
include '../dbconnection.php';
ob_start();
session_start();
$usr=$_SESSION['admin'];

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
    
    $ins_grp1=mysqli_query($dbcon,"insert into zone values('','$t1','$t2')");
    if($ins_grp1>0)
    {
      
          
      header("location:add_zone.php?suss=1");     

       }
       
    }
    else
    {
    echo mysqli_error($dbcon);
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
                <h1 class="page-title">Add Zone</h1>
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
                                        <label>Zone Name</label>
                                        <input class="form-control" type="text"name="t1" placeholder="Service Name">
                                    </div>
                                <div class="form-group">
                                    <label class="form-control-label">State</label>
                                    <select class="form-control select2_demo_1"name="t2">
                                        <optgroup label="States of India">
                                           
                                        <option value="">Choose One</option>
                                        <?php
                                        $sel_state=mysqli_query($dbcon,"select * from state");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[0] ?>"><?php echo $r_state[1] ?></option>
                                       <?php
                                           }
                                        ?>
                                   
                                        </optgroup>
                                        
                                    </select>
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
                            <div class="ibox-head">
                                
                            </div>
                           <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Zone State</div>
                            </div>
                            <div class="ibox-body">
                                <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from zone");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $r_gal[1] ?></td>
                                           
                                            <td><a href="view_dist.php?mid=<?php echo $r_gal[2] ?>"><i class="fa fa-search text-primary"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="add_dist.php?mid=<?php echo $r_gal[2] ?>"><i class="fa fa-plus text-success"></i></a></td>
                                        </tr>
                                        <?php
                                                            }
                                                            ?>
                                        
                                    </tbody>
                                    <?php
                                                        }
                                                        ?>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div>
                    
                        
                        
                    </a>
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
    <div class="theme-config">
        <div class="theme-config-toggle"><i class="fa fa-cog theme-config-show"></i><i class="ti-close theme-config-close"></i></div>
        <div class="theme-config-box">
            <div class="text-center font-18 m-b-20">SETTINGS</div>
            <div class="font-strong">LAYOUT OPTIONS</div>
            <div class="check-list m-b-20 m-t-10">
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedNavbar" type="checkbox" checked>
                    <span class="input-span"></span>Fixed navbar</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedlayout" type="checkbox">
                    <span class="input-span"></span>Fixed layout</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input class="js-sidebar-toggler" type="checkbox">
                    <span class="input-span"></span>Collapse sidebar</label>
            </div>
            <div class="font-strong">LAYOUT STYLE</div>
            <div class="m-t-10">
                <label class="ui-radio ui-radio-gray m-r-10">
                    <input type="radio" name="layout-style" value="" checked="">
                    <span class="input-span"></span>Fluid</label>
                <label class="ui-radio ui-radio-gray">
                    <input type="radio" name="layout-style" value="1">
                    <span class="input-span"></span>Boxed</label>
            </div>
            <div class="m-t-10 m-b-10 font-strong">THEME COLORS</div>
            <div class="d-flex m-b-20">
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Default">
                    <label>
                        <input type="radio" name="setting-theme" value="default" checked="">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-white"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue">
                    <label>
                        <input type="radio" name="setting-theme" value="blue">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-blue"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green">
                    <label>
                        <input type="radio" name="setting-theme" value="green">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-green"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple">
                    <label>
                        <input type="radio" name="setting-theme" value="purple">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-purple"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Orange">
                    <label>
                        <input type="radio" name="setting-theme" value="orange">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-orange"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Pink">
                    <label>
                        <input type="radio" name="setting-theme" value="pink">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-pink"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
            </div>
            <div class="d-flex">
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="White">
                    <label>
                        <input type="radio" name="setting-theme" value="white">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue light">
                    <label>
                        <input type="radio" name="setting-theme" value="blue-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-blue"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green light">
                    <label>
                        <input type="radio" name="setting-theme" value="green-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-green"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple light">
                    <label>
                        <input type="radio" name="setting-theme" value="purple-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-purple"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Orange light">
                    <label>
                        <input type="radio" name="setting-theme" value="orange-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-orange"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Pink light">
                    <label>
                        <input type="radio" name="setting-theme" value="pink-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-pink"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
            </div>
        </div>
    </div>
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