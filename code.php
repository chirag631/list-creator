<?php
session_start();
$connection = mysqli_connect("localhost","root","","my_db");

//code for register user
if(isset($_POST['register_user']))
{
    $username=$_POST['username'];
    $password=$_POST['create_password'];
    $mobile_no=$_POST['mobile_no'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $date_of_birth=$_POST['date_of_birth'];
        
    $query = "INSERT INTO register_user (username,password,mobile_no,email,city,dob) VALUES ('$username','$password','$mobile_no','$email','$city','$date_of_birth')";
    $query_run = mysqli_query($connection, $query);
    
    
   
        if($query_run)
        {
            $_SESSION['success']="Register Successfully";
             
            header('Location: login_user.php');
        }
        else 
        {
            $_SESSION['status']="Ragister Failed. Try again";
            
            header('Location: register_user.php');
        }     
}


//code for login user
if(isset($_POST['login_user'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = " SELECT * FROM register_user  ";
    
    $query = mysqli_query($connection,$sql);
    
    $status=0;
    while($rows=mysqli_fetch_array($query))
    {
        if($email==$rows['email'] && $password==$rows['password'])
        {

        $status=1;
        $userid=$rows['id'];


        }
        


    }

    if($status=1)
        {

        
        $_SESSION['user_id']=$userid;
        $_SESSION['user'] = $email; 
        header('location:user_page/home_page.php');


        }
        else
        {
            $_SESSION['status']="Username or Password incorrect. Try again";      
       

        header('location:login_user.php');
        }
    
   /* if($row == 1)
    {
       
       $_SESSION['user'] = $email; 
        header('location:user_page/home_page.php');
    }    
    else
    {
        $_SESSION['status']="Username or Password incorrect. Try again";      
       

        header('location:login_user.php');
        
    }*/
}

//code for login admin
if(isset($_POST['login_admin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = " SELECT * FROM register_admin WHERE email='$email' && password='$password' ";
    
    $query = mysqli_query($connection,$sql);
    
    $row = mysqli_num_rows($query);
    
    
    if($row == 1)
    {
       
        $_SESSION['user'] = $email;
        header('location:index.php');
    }    
    else
    {
        $_SESSION['status']="Username or Password incorrect. Try again";      

        header('location:login_admin.php');
        
    }
}


if(isset($_POST['registerbtn']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['confirmpassword'];
    $mobile_no=$_POST['mobile_no'];
    $city=$_POST['city'];
    $dob=$_POST['dob'];
  
      
       if($password === $cpassword)
    {
       
    $query = "INSERT INTO register_admin (username,password,email,mobile_no,city,dob) VALUES ('$username','$password','$email','$mobile_no','$city','$dob')";
    $query_run = mysqli_query($connection, $query);
    
    
   
        if($query_run)
        {
            
            $_SESSION['success'] =  "Admin Profile Added ";
            header('Location: register_admin.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin Profile Not Added";
            header('Location: register_admin.php');
        } 
        
        
     }
    else
    {
        $_SESSION['status'] =  "password and confirm password does not match ";
            header('Location: register_admin.php');
        
    }
    
    
}


if(isset($_POST['updatebtn']))
{
    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $password=$_POST['edit_password'];
    $email=$_POST['edit_email'];
    $mobile_no=$_POST['edit_mobile_no'];
    $city=$_POST['edit_city'];
    $dob=$_POST['edit_dob'];
    
    $query="UPDATE register_admin SET username='$username',email='$email',password='$password',mobile_no='$mobile_no',city='$city',dob='$dob' WHERE id='$id' ";
    $query_run=mysqli_query($connection,$query);
    
    if($query_run)
    {
        $_SESSION['success']="Your Data is Updated";
        header('Location: register_admin.php');
    }
    else
    {
         $_SESSION['status']="Your Data is not Updated";
        header('Location: register_admin.php');
    }
    
}

if(isset($_POST['delete_btn']))
{
    
    $id = $_POST["delete_id"];
    $query = "DELETE FROM register_admin WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: register_admin.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Deleted";
        header('Location: register_admin.php');
    }
    
}


?>


