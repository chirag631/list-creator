<?php

session_start();
$connection = mysqli_connect("localhost","root","","my_db");

?>

<div class="container-fluid">

<div class="row ">      
            <div class="col-7 mb-5 ml-6">
                
              <div class="card border-left-success shadow h-100 py-2" >
                <div class="block bg-success">  Product Sales   </div>
                <div class="card-body">
                    <div class="block ">
                 
                 <?php 
                 $id=$_GET['id'];
                 $res=mysqli_query($connection,"select * from product where id=$id");
                 while($row=mysqli_fetch_array($res))
                 {
                 $item_name=$row['item_name'];
                 
                 }


                 ?>

 <form class="form-container" name="form1" action="" method="post" enctype="multipart/form-data">
                 
                 <table class="table table-bordered">
     
                       
                      <tr>
                        <td>Item Name</td>
                        <td ><input type="text" name="item_name" value="<?php echo $item_name; ?>"></td>
                        </tr>
                        
                        <tr> 
                        <td colspan="2" align="center"><input type="submit" name="submit1" value="update"></td>
                        </tr>
                      
                      
                      </table>
                    
                    
                    </form>
                    

                 
                 
         
                    </div>
                </div>

<?php

if(isset($_POST['submit1']))
{
    
        mysqli_query($connection,"update user_creation set item_name='$_POST[item_name]' where id=$id");

        header'(Location:home_page.php)';


    }
?>