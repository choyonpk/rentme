<?php
include "db_connect.php";
$name=$email=$uname=$pass=$conf_pass=$phone=$nid=$address="";
$name_err=$email_err=$pass_err=$uname_err=$nid_err=$phn_err=$add_err=$conf_pass_err=$geder_err="";
$flag = 1;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST['submit']))
  {
    if(empty($_POST['name']))
    {
        $name_err="NAME CAN NOT BE EMPTY";
    $flag = 0;
    }else
    {
      $name=$_POST['name'];
    }
    if(empty($_POST['Email']))
    {
        $email_err="EMAIL CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $email=$_POST['Email'];
    }
    if(empty($_POST['uname']))
    {
        $uname_err="USERNAME CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $uname=$_POST['uname'];
      $uname = strtoupper($uname); 
    }
    if(empty($_POST['pass']))
    {
        $pass_err="PASSWORD CAN NOT BE EMPTY";
    $flag = 0;
    }
    else{
      $pass=$_POST['pass'];
    }
    if(empty($_POST['con_pass']))
    {
        $conf_pass_err="CONFIRM PASSWORD CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $conf_pass=$_POST['con_pass'];
    }
    if(empty($_POST['nid']))
    {
      $nid_err="NATIONAL ID NUMBER CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $nid=$_POST['nid'];
    }
    if(empty($_POST['phone']))
    {
      $phn_err="PHONE NUMBER CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $phone=$_POST['phone'];
    }
    if(empty($_POST['address']))
    {
      $add_err="ADDRESS CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $address=$_POST['address'];
    }
    if($pass != $conf_pass)
    {
      $pass_err="PASSWORD AND CONFIRM PASSWORD DOES NOT MATCH";
      $flag = 0;
    }

    if($flag)
    {
    $name=mysqli_real_escape_string($con,$name);
    $pass=mysqli_real_escape_string($con,$pass);
    $email=mysqli_real_escape_string($con,$email);
    $uname=mysqli_real_escape_string($con,$uname);
    $nid=mysqli_real_escape_string($con,$nid);
    $phone=mysqli_real_escape_string($con,$phone);
    $address=mysqli_real_escape_string($con,$address);
    $status = "active";

    $sql="insert into owner(username,email,phone,Address,password,status,nid,Name) values('$uname','$email','$phone','$address','$pass','$status','$nid','$name')";

    if (mysqli_query($con, $sql)) {
    } else {
      echo "user table Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
  }
  
} 
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration For Home Owner</title>

</head>
<body>
<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" name="registration">
<div align = "center">
      <h4>Registration For Home Owner</h2>
      <table>
        <tr>
          <td><input type="text" name="name" placeholder='NAME' value="<?php echo $name;?>"></td>
        </tr>
        <tr>
          <td id="name_err"><?php echo $name_err;?></td>
        </tr>

        <tr>
          <td><input type="email" name="Email" placeholder='EMAIL' value="<?php echo $email;?>"></td>
        </tr>

        <tr>
          <td id="email_err"><?php echo $email_err;?></td>
        </tr>
            
        <tr>
              <td><input type="text" name="uname" id="uname" placeholder='USERNAME' value="<?php echo $uname;?>"></td>
        </tr>
        <tr>
              <td id="uname_err"><?php echo $uname_err;?></td>
        </tr>
            
        <tr>
              <td><input type="Password" name="pass" id="pass" placeholder='PASSWORD'></td>
        </tr>
        <tr>
              <td id="pass_err"><?php echo  $pass_err;?></td>
        </tr>
            
        <tr>          
              <td><input type="Password" name="con_pass" id="con_pass" placeholder='CONFIRM PASSWORD'></td>
        </tr>
        <tr>
              <td id="conf_pass_err"><?php echo  $conf_pass_err;?></td>
        </tr>
       <tr>
         <td><input type="number" name="nid" placeholder='NATIONAL ID NUMBER' value="<?php echo $nid;?>"></td>
        </tr>
        <tr>
         <td id="nid_err"><?php echo  $nid_err;?></td>
       </tr>

       <tr>
         <td><input type="number" name="phone" placeholder='PHONE NUMBER' value="<?php echo $phone;?>"></td>
        </tr>
        <tr>
         <td id="phn_err"><?php echo  $phn_err;?></td>    
       </tr> 

       <tr> 
         <td>
           <textarea placeholder='ADDRESS' name="address" value="<?php echo $address;?>" ></textarea></td>
        </tr>
        <tr>
         <td id="add_err"><?php echo  $add_err;?></td>
       </tr> 

       <tr>
         <td colspan=2><input type="submit" name="submit" value="REGISTER" id='btn'></td>
       </tr> 

       <tr>
         <td colspan=2><a href = "login.php">Login</a></td>
       </tr> 
                 
   </table>   
</div>
   </form>
   
</body>

</html>