<?php

session_start();
$connection = mysqli_connect("localhost","root","","my_db");


    $id=$_GET["id"];


$query_run=mysqli_query($connection,"delete from user_creation where id=$id");  
   
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









?>