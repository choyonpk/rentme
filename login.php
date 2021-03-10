
<!-- Owner loginnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn-->

<?php



session_start();

require "db_connect.php";
global $con;

$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['uname']))
  {
    $err_uname="*Username Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['uname'];
  }
  if(empty($_POST['psw']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['psw'];
  }
  if(!$has_error)
  {
    $query = "SELECT username from owner where username='$uname' and password='$psw'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["username"];

      header("Location:owner.html");
    }
    else
    {

    }
  }


}
?>



<!-- homeseeker loginnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn-->

<?php

$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['uname']))
  {
    $err_uname="*Username Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['uname'];
  }
  if(empty($_POST['psw']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['psw'];
  }
  if(!$has_error)
  {
    $query = "SELECT username from homeseeker where username='$uname' and password='$psw'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["username"];

      header("Location:homeseeker.html");
    }
    else
    {

    }
  }


}
?>




<!-- Admin loginnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn-->

<?php

$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['uname']))
  {
    $err_uname="*Username Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['uname'];
  }
  if(empty($_POST['psw']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['psw'];
  }
  if(!$has_error)
  {
    $query = "SELECT username from admin where username='$uname' and password='$psw' and type='Admin'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["username"];

      header("Location:admin.html");
    }
    else
    {
echo '<script>alert("Please check your username and Password")</script>';
    }
  }


}
?>

<!-- moderator loginnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn-->
<?php

$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['uname']))
  {
    $err_uname="*Username Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['uname'];
  }
  if(empty($_POST['psw']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['psw'];
  }
  if(!$has_error)
  {
    $query = "SELECT username from modarator where username='$uname' and password='$psw' and type='Moderator'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["username"];

      header("Location:modarator.html");
    }
    else
    {
echo '<script>alert("Please check your username and Password")</script>';
    }
  }


}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

  </head>

  <body>
    <form class="box" action="" method="post">
  <table align = "center">

    <h1 align = "center">Login</h1>
      

      <!--php validation error dekhanor jonno-->

    <tr>
      <td><input type="text" placeholder="Enter Username" name="uname"></td>
    <td><span> <?php echo $err_uname;?></span></td>
</tr>

<tr>
      <td><input type="password" placeholder="Enter Password" name="psw" ></td>
                <td><span><?php echo $err_psw;?></span></td>  
</tr>
     <tr>
        
        <td><input type="submit" name="login" value="Login" /></td>
</tr>
<tr>
        <td><a href = "SignUpOwner.php">Sign Up As A Home Owner</a> </td>
</tr>
<tr>
        <td><a href = "SignUpHomeSeeker.php">Sign Up As A Home Seeker</a></td>
</tr>
</table>
    </form>
  </body>
</html>
