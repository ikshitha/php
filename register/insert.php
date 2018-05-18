<?php
 $con = mysqli_connect('localhost','root','');

 if(!$con)
 {
     echo 'Not Connected To Server';
 }
 if(!mysqli_select_db($con,'tutorial'))
 {
     echo 'database not selected';
 }

  $Name = $_POST['username'];
  $Email = $_POST['email'];

  $sql = "INSERT INTO person (Name,Email) VALUES ('$Name','$Email')";

  if(!mysqli_query($con,$sql))
  {
      echo 'Not inserted';
  }
else
{
    echo 'inserted';
}
header("refresh:2; url=document.php");



?>