<?php

session_start();
$connection = mysqli_connect("localhost","root","","my_db");

//code for register user
if(isset($_POST['add_item']))
{


    $item_name=$_POST['item_name'];
    $user_id=$_SESSION['user_id'];

    $query = "INSERT INTO user_creation (user_id,item_name) VALUES ($user_id,'$item_name')";
    $query_run = mysqli_query($connection, $query);
    
    
   
        if($query_run)
        {
            
            echo "yes";
            header('Location: home_page.php');
        }
        else 
        {
          echo "no";
            header('Location: home_page.php');
        }     
}



?>