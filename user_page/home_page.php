<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:../login_user.php');
}

$user_id=$_SESSION['user_id'];

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Form HTML/CSS Template - reusable form</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        
<style type="text/css">
.box{
  color: rgb(255, 102, 5);

font-size: 40px;
  width: 600px;
  padding: 5px 30px 30px 20px;
  
}
</style>
    </head>
    <body >
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><i class='fab fa-r-project' style='font-size:48px;color:red'></i></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home_page.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Feedback</a>
      </li>
    </ul>
  </div>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav ml-auto">


<!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user']; ?></span>
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>




<!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

    </ul>
  </div>
</nav>


            
      

        <div class="container" >
            <div id="form-main" >
              
                <div id="form-div" style="margin-bottom: 50px">
                  <div class="box" >

                
                    Add item to list
            
        </div>
        <div class="container-fluid">

  
         

          <!-- Content Row -->
          <div class="row ">      
            <div class="col-12 mb-5 ml-6">
                
              <div class="card border-left-success shadow h-100 py-2" >


                <div class="block bg-success"> Display List   </div>
                <div class="card-body">
                    <div class="block ">
                    <form name="form1" method="post" action="check.php">

  <label for="add item">add item</label><br>
  <input type="text" name="item_name" ><br>
  
  <input type="submit" name="add_item" value="Submit">





                </form> 

<?php 
                 
$connection = mysqli_connect("localhost","root","","my_db");

                 $res=mysqli_query($connection,"select * from user_creation where user_id=$user_id");
                 ?>


                 <table class="table table-bordered">
                 
<?php
                 echo "<tr >"; 
                 echo "<th>"; echo "id"; echo "</th>";
                 echo "<th>"; echo "item_name"; echo "</th>";
                 echo "<th>"; echo "Edit"; echo "</th>";
                 echo "<th>"; echo "Delete"; echo "</th>";
                 
                 echo "</tr>";
                 while($row=mysqli_fetch_array($res))
                 {
                    echo "<tr >";
                    echo "<td>"; echo $row["id"]; echo "</td>";
                    echo "<td>"; echo $row["item_name"]; echo "</td>";

                    echo "<td>"; ?>   <a href="edit_item.php?id=<?php echo $row["id"]; ?>">Edit</a>     <?php echo "</td>";
                    echo "<td>"; ?>   <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>     <?php echo "</td>";
                        echo "</td>"; 
                    echo "</td>";
                    echo "</tr>";

                 } 

                 ?>                    
           </table>   
           </div>
                </div>
              </div>
            </div>
</div>
</div>
      
                    
            </div>


</div>
</div>
        </div>
    </body>
</html>