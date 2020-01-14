<?php

session_start();
include('includes/connection.php');
if (!isset($_SESSION['customer_id'])) {
   
    echo '<script>window.top.location="login.php"</script>';
}
//the action will start 

if (isset($_POST['submit'])) {
    //fetch data
    $customer_name     = $_POST['name'];
    $customer_email    = $_POST['email'];
    $password          = $_POST['password_hash(string, PASSWORD_DEFAULT)'];
    $mobile            = $_POST['mobile'];


//create query
    if ($_FILES['pro_images']['error']==0) {
        $query="UPDATE customer SET name  = '$customer_name',
                                email = '$customer_email',
                                password = '$password',
                                mobile = '$mobile'
                             WHERE customer_id = {$_SESSION['customer_id']}";
        
    }


    
//perform query
    mysqli_query($conn,$query);

    
    echo '<script>window.top.location="profile.php"</script>';

}



?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
     <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                   
                    <li class="menu-title">User Profile</li><!-- /.menu-title -->

                    <li>
                        <a href="profile.php"> <i class="menu-icon fa fa-location-arrow"></i>Edit Profile</a>
                    </li>
                    <li>
                        <a href="add_pet.php"> <i class="menu-icon fa fa-briefcase"></i>Place an Ad </a>
                    </li>
                    <li>
                        <a href="show_pet.php"> <i class="menu-icon fa fa-inbox"></i>Show Your Ad</a>
                    </li>
                    

                   
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
      <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="admin/uplode/pat.png" width="145px" height="31px" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                   

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a> -->

                            <!-- <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> -->

                            <a class="nav-link" href="user_logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->


<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Profile</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Profile</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data" >
                                <?php
                            $query2  = "SELECT * FROM customer where customer_id = {$_SESSION['customer_id']}";
                            $result2 = mysqli_query($conn,$query2);
                            $row2    = mysqli_fetch_assoc($result2);
                                ?>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Name</label>
                                    <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row2['name']?>">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Email</label>
                                    <input id="cc-pament" name="email" type="email" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row2['email']?>">
                                </div>
                                  <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">password</label>
                                    <input id="cc-pament" name="password" type="password" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row2['password']?>">
                                </div>
                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Mobile</label>
                                    <input id="cc-pament" name="mobile" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row2['mobile']?>">
                                </div>
                               
                               
                               <!--  <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Pet Images</label>
                                    <input id="cc-pament" name="pro_images" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                </div> -->
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg bg-success btn-block"
                                    name="submit">

                                    <span id="payment-button-amount" style="color: #fff">Update Profile</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        </div>
    </div>
            


    <?php include('includes/admin_footer.php')?>