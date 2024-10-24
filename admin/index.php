
<?php
ob_start();
include '../dbconnection.php';
session_start();
?>
<?php
                                             
                           
if(isset($_POST['sub']))
{
$t1=$_POST['t1'];
    $t2=$_POST['t2'];

$log=mysqli_query($dbcon,"select * from user_log where uid='$t1' and pwd='$t2'");
if(mysqli_num_rows($log)>0)
{
    
    $r=mysqli_fetch_row($log);
if($r[3]=="admin")
{
    $_SESSION['admin']=$t1;
     
    header("location:home.php");
    
}

if($r[3]=="dist")
{
    $_SESSION['dist']=$t1;
     
    header("location:../district/home.php");
    
}
}
else
{
    header("location:index.php?Fail=1");
}
    

}
                                    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admincast bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Login</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="../ad_temp/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../ad_temp/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../ad_temp/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="../ad_temp/assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="../ad_temp/assets/css/pages/auth-light.css" rel="stylesheet" />
</head>

<body class="bg-silver-300">
    <div class="content">
        <div class="brand">
            <a class="link" href="../ad_temp/index.html">Admin/District</a>
        </div>
        <form id="login-form"method="post">
            <h2 class="login-title">Log in</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    <input class="form-control" type="email" name="t1" placeholder="Email" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="t2" placeholder="Password">
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Remember me</label>
               
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" name="sub" type="submit">Login</button>
            </div>
            
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="../ad_temp/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="../ad_temp/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="../ad_temp/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="../ad_temp/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="../ad_temp/assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>