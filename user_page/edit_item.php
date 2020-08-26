<?php

session_start();
$connection = mysqli_connect("localhost","root","","my_db");

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


        <div class="container" >
            <div id="form-main" >
              
                <div id="form-div" style="margin-bottom: 50px">
                  <div class="box" >

                Edit Item Name
            
        </div>
<div class="container-fluid">

<div class="row ">      
            <div class="col-12 mb-5 ml-6">
                
              <div class="card border-left-success shadow h-100 py-2" >
                <div class="block bg-success">  change name   </div>
                <div class="card-body">
                    <div class="block ">
                 
                 <?php 
                 $id=$_GET['id'];
                 $res=mysqli_query($connection,"select * from user_creation where id=$id");
                 
                 while($row=mysqli_fetch_array($res))
                 {
                 $item_name=$row['item_name'];
                 
                 }


                 ?>

 <form class="form-container" name="form1" action="" method="post" enctype="multipart/form-data">
                 
                 
     
                       
                      
                        <h6>Item Name
                        <input type="text" name="item_name" value="<?php echo $item_name; ?>">
                      
                        </h6>

                         
                        <td colspan="2" align="center"><input type="submit" name="submit1" value="update">
                        
                      
                      
                      </table>
                    
                    
                    </form>
                    

                 
                 
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
<?php

if(isset($_POST['submit1']))
{
    
        mysqli_query($connection,"update user_creation set item_name='$_POST[item_name]' where id=$id");

        header('Location:home_page.php');


    }
?>

 </body>
</html>