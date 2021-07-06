<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href=" ">
    <meta charset="UTF-8">
    <title></title>
    
</head> 
<body>
<div style="background-color:blue; height:100px; width: 1500px; top: 0px;">
    <h1><i>BlockSec</i></h1>
     
<div>
                                                                                                         
<input type="button" value="Userguide"style="float:right"; /> 
<input type="button" value="about"style="float:right"; /> 
<input type="button" value="support"style="float:right"; />        
<a href='studentreg.php'><button class="buttonset2">student registration</button></a>

<input type="button" name="b4" value="student" class="buttonset1">

<input type="button" value="Logout"style="float:right"; /> 

</div>
</div>
    </body>

    </html>
<?php

session_start();
include ('header.php');
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>

<section id="main-site">
    <div class="container py-5">
        <div class="row">
            <div class="col-4 offset-4 shadow py-4">
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <img class="img rounded-circle" style="width: 200px; height: 200px;" src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png'; ?>" alt="">
                        <h4 class="py-3">
                            <?php
                            if(isset($user['firstName'])){
                                printf('%s %s', $user['firstName'], $user['lastName'] );
                            }
                            ?>
                        </h4>
                    </div>
                </div>

                <div class="user-info px-3">
                    <ul class="font-ubuntu navbar-nav">
                        <li class="nav-link"><b>First Name: </b><span><?php echo isset($user['firstName']) ? $user['firstName'] : ''; ?></span></li>
                        <li class="nav-link"><b>Last Name: </b><span><?php echo isset($user['lastName']) ? $user['lastName'] : ''; ?></span></li>
                        <li class="nav-link"><b>Email: </b><span><?php echo isset($user['email']) ? $user['email'] : ''; ?></span></li>
                    </ul>
                
                </div>
                          
        </div>
    </div>
</section>
<div>
                          
                          <a href='index.php'><button class="buttonset2"></button></a>

                </div>

<?php
include "footer.php";
?>
