

<!-- in this page there are all html part to divide subpart.
then stored into include folder and when its required just include it using php.
it is help to reduce code and also use for write one time and use maultiple page. 
 -->


<?php
//session used for user can't access webpage by entering path directly.
//only who can access this page which have registered user have authority to access this page.
//in all webpage used session use  
session_start();
if(!isset($_SESSION['user'])){
    header('location:login_admin.php');
}
?>
<?php 
//header file included 
include('includes/header.php');
//sidebar included which contain sidemanu and navigation manu 
include('includes/navbar.php');
?>

<!-- body of the page -->  
   <!-- user data  -->

        <div class="container-fluid">


        <div class="container-fluid">

          <?php

$connection = mysqli_connect("localhost","root","","my_db");

?>

          <!-- Content Row -->
          <div class="row ">      
            <div class="col-9 mb-5 ml-6">
                
              <div class="card border-left-success shadow h-100 py-2" >
                <div class="block bg-success">  User Data   </div>
                <div class="card-body">
                    <div class="block ">
                 
                 <?php 
                 

                 $res=mysqli_query($connection,"select * from register_user");
                 ?>


                 <table class="table table-bordered">
                 
<?php
                 echo "<tr >"; 
                 echo "<th>"; echo "Id"; echo "</th>";
                 echo "<th>"; echo "username"; echo "</th>";
                 echo "<th>"; echo "password"; echo "</th>";
                 echo "<th>"; echo "Mobile No"; echo "</th>";
                 echo "<th>"; echo "email"; echo "</th>";
                 echo "<th>"; echo "city"; echo "</th>";
                 echo "<th>"; echo "Date Of Birth"; echo "</th>";




                 echo "</tr>";
                 while($row=mysqli_fetch_array($res))
                 {
                    echo "<tr>";
                    echo "<td>"; echo $row["id"]; echo "</td>"; 
                    echo "<td>"; echo $row["username"]; echo "</td>"; 
                    echo "<td>"; echo "****"; echo "</td>";
                    echo "<td>"; echo $row["email"]; echo "</td>";
                    echo "<td>"; echo $row["mobile_no"]; echo "</td>";
                    echo "<td>"; echo $row["city"]; echo "</td>";
                    echo "<td>"; echo $row["dob"]; echo "</td>";
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
  
         

         
      

 

<?php
include('includes/script.php');


//footer included
include('includes/footer.php');


?>
  

 

