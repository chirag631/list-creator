<?php
session_start();
$connection= mysqli_connect('localhost','root','','my_db');

include('includes/header.php'); 
?>



<div class="container center-div1">
<div class="row justify-content-center">  
     <div class="col-7 mb-4 ml-5">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User
        <a href="login_user.php">   
        <button type="button" class="btn btn-primary" >
              Login
            </button>
            </a>
            <a href="register_user.php">   
        <button type="button" class="btn btn-primary" >
              Sign Up
            </button>
            </a>
            or Admin
        <a href="login_admin.php">   
        <button type="button" class="btn btn-primary" >
              Login
            </button>
            </a>
    </h6>
  </div>

  <div class="card-body">
      
      <?php
      if(isset($_SESSION['success'])&&$_SESSION['success']!='')
      {
          echo '<h2 class="bg-primary" >'.$_SESSION['success'].'</h2>';
          unset($_SESSION['success']);
      }
      
      if(isset($_SESSION['status'])&&$_SESSION['status']!='')
      {
          echo '<h2 class="bg-danger">'.$_SESSION['status'].'</h2>';
          unset($_SESSION['status']);
      }
      
      ?>
<div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register Here!</h1>
                <?php

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>
              </div>

                <form class="user" action="code.php" method="POST">

                    <div class="form-group">
                    <input type="name" name="username" class="form-control form-control-user" placeholder="Enter username" required>
                    </div>
                    <div class="form-group">
                    <input type="password" name="create_password" class="form-control form-control-user"
                    placeholder="Enter Password" required>
                    </div>
                    <div class="form-group">
                    <input type="name" name="mobile_no" class="form-control form-control-user" placeholder="Enter mobile No.">
                    </div>
                    <div class="form-group">
                    <input type="name" name="email" class="form-control form-control-user" 
                    placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                    <input type="name" name="city" class="form-control form-control-user" placeholder="city">
                    </div>
                    <div class="form-group">
                    <input type="date" name="date_of_birth" class="form-control form-control-user" placeholder="Enter date of birth">
                    </div>
            
                    <button type="submit" name="register_user" class="btn btn-primary btn-user btn-block"> Register </button>
                    <hr>
                </form>


            </div>
          </div>
        </div>
   

    </div>
  </div>
</div>

</div>

</div>


<?php
include('includes/script.php'); 
?>