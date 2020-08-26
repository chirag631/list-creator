<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login_admin.php');
}
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
            </div>
        <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label>Mobile No</label>
                <input type="name" name="mobile_no" class="form-control" placeholder="Enter Mobile No">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="name" name="city" class="form-control" placeholder="Enter City" >
            </div>
            <div class="form-group">
                <label>Date Of Birth</label>
                <input type="Date" name="dob" class="form-control" placeholder="Enter Date">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">
      
      <?php
      if(isset($_SESSION['success'])&&$_SESSION['success']!='')
      {
          echo '<h2 class="bg-success" >'.$_SESSION['success'].'</h2>';
          unset($_SESSION['success']);
      }
      
      if(isset($_SESSION['status'])&&$_SESSION['status']!='')
      {
          echo '<h2 class="bg-danger">'.$_SESSION['status'].'</h2>';
          unset($_SESSION['status']);
      }
      
      ?>

    <div class="table-responsive">

        <?php
        $connection = mysqli_connect("localhost","root","","my_db");
        
         $query = "SELECT * FROM register_admin";
    $query_run = mysqli_query($connection, $query);
        
        ?>
        
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Password</th>
            <th>Email </th>
            <th>Mobile No </th>
            <th>City </th>
            <th>Date of Birth </th>
            
              <th>EDIT</th>
              <th>DELETE</th>           
          </tr>
        </thead>
        <tbody>
     <?php
     if(mysqli_num_rows($query_run)>0)
     {
        while($row=mysqli_fetch_assoc($query_run))
        {
     
     ?>
          <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['username']; ?> </td>
            <td> **** </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <?php echo $row['mobile_no']; ?> </td>
            <td> <?php echo $row['city']; ?> </td>
            <td> <?php echo $row['dob']; ?> </td>
            
            <td>
                <form action="register_edit.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>"  >
                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button> 
                </form>
              </td>
              <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>" >
                <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button> 
               </form>
              </td>
          </tr>
          
          <?php
          }
     }
          else
          {
            echo "No Record Found";
          }
          
          ?>
          
        
        </tbody>
      </table>

    </div>
  </div>
</div>




<!-- /.container-fluid -->



<?php
include('includes/script.php');
include('includes/footer.php');
?>