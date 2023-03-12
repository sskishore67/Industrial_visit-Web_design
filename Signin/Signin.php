<?php
// Create connection
$con=mysqli_connect('localhost','root','','Signup');
// Check connection

if (!$con) {
    die("Connection failed: ");
  }
  if(isset($_POST['Signin']))
  {
    $email_id=$_POST['Signin-Email'];
    $password=$_POST['Signin-Password'];
    $query="select * from signup where Email='$email_id' and Password='$password'";
    $result=mysqli_query($con,$query);

    if($result && mysqli_num_rows($result)>0)
    {
        $user_data=mysqli_fetch_assoc($result);
        if($user_data['Email'] === $email_id && $user_data['Password']===$password)
        {
            header("location:Main1.html");
            die;
        }
    }
    else{
        echo'<script>alert("Invalid User Name or Password")</script>';  
    }
}

?>