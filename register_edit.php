<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login_admin.php');
}
$connection = mysqli_connect("localhost","root","","my_db");
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



    
    <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
             EDIT Admin Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">
      
      <?php
      
      
      
      if(isset($_POST['edit_id']))
      {
          $id=$_POST['edit_id'];
          $query="SELECT * FROM register_admin WHERE id='$id' ";
          $query_run=mysqli_query($connection,$query);
          foreach($query_run as $row)
          {
              ?>
      <form action="code.php" method="post">
          
          <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

          
          
      <div class="form-group">
                <label> Username </label>
                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="edit_password" value="<?php  echo $row['password']  ?>" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php  echo $row['email']  ?>" class="form-control" placeholder="Enter Email">
            </div>
           <div class="form-group">
                <label>Mobile No</label>
                <input type="name" name="edit_mobile_no" value="<?php  echo $row['mobile_no']  ?>" class="form-control" placeholder="Enter Mobile No">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="name" name="edit_city" value="<?php  echo $row['city']  ?>" class="form-control" placeholder="Enter city">
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="edit_dob" value="<?php  echo $row['dob']  ?>" class="form-control" placeholder="Enter DOB">
            </div>
           
      <a href="register.php" class="btn btn-danger">CANCEL</a>
      <button type="submit" name="updatebtn" class="btn btn-primary">UPDATE</button>
    
          </form>
          <?php
          }
      }
      ?>
          

    </div>
  </div>
</div>



<?php
include('includes/script.php');
include('includes/footer.php');
?>