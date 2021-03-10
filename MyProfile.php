<!DOCTYPE html>
<html>
<head>
  <title>Profile Update</title>

</head>
<body>
<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" >
<div align = "center">
      <h4>Profile Update</h2>
      <table>
        <tr>
          <td><input type="text" name="name" placeholder='NAME' ></td>
        </tr>
       

        <tr>
          <td><input type="email" name="Email" placeholder='EMAIL' ></td>
        </tr>

        
            
        <tr>
              <td><input type="text" name="uname" id="uname" placeholder='USERNAME'></td>
        </tr>
        
            
        <tr>
              <td><input type="Password" name="pass" id="pass" placeholder='PASSWORD'></td>
        </tr>
        
            
        <tr>          
              <td><input type="Password" name="con_pass" id="con_pass" placeholder='CONFIRM PASSWORD'></td>
        </tr>
       
       <tr>
         <td><input type="number" name="nid" placeholder='NATIONAL ID NUMBER'></td>
        </tr>
       

       <tr>
         <td><input type="number" name="phone" placeholder='PHONE NUMBER'></td>
        </tr>
        

       <tr> 
         <td>
           <textarea placeholder='ADDRESS' name="address"></textarea></td>
        </tr>
       

       <tr>
         <td colspan=2><input type="submit" name="submit" value="UPDATE" id='btn'></td>
       </tr> 

       <tr>
         <td colspan=2><a href = "owner.html">Back</a></td>
       </tr> 
                 
   </table>   
</div>
   </form>
   
</body>

</html>