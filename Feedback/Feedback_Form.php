<?php

// Create connection
$con=mysqli_connect('localhost','root','','feedback-form');
// Check connection
if (!$con) {
    die("Connection failed: ");
  }
  if(isset($_POST['submit']))
  {
    $Email_id=$_POST['email'];
    $Feedback=$_POST['message'];
    $ins="insert into feedback(Email,Feedback)values('$Email_id','$Feedback')";
    $r=mysqli_query($con,$ins);
    if($r)
    {
        echo"Added successfully";
    }
    else
    {
        echo'not added';
    }
  }

?>
