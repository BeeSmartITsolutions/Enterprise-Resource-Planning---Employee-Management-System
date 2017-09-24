<?php
session_start();
$flag= 0;
?>
<!DOCTYPE html PUBLIC "Employee Managememnt System" >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee Management System | Login Pannel</title>
</head>

<link href="style.css" rel="stylesheet" type="text/css">

<body>

<?php
extract($_POST);
include("database.php");

if(isset($_POST['submit']))
{
	$rs=mysql_query("select * from ems_login where email='$loginid' and pass='$pass'");
	while ($row = mysql_fetch_array($rs)) {
		
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	
	}
	else if(($row['email']==$loginid)&&($row['pass']==$pass)){
	{
		
		$_SESSION["email"]=$loginid;
		$flag=1;
		break;

		}}}
}
if ($flag == 1)
{
header("Location: welcome.php");	
	
}
else{
	header("Location: index.php");
}
?>
   <div class="container">

     <video poster="New folder/vid.jpg" autoplay="true" loop> 
              
         <source src="video.MP4">
         <source src="video.webm">
         <source src="video.3gp">
         <source src="video.mov">
            
        </video>   
        
         <div class="text">
            
            <div class="box">
           <img src="New folder/logo.png" width="200" height="180"> 
      <h1 title="login here">Login</h1>
      <form name="login" method="post" action="">
      
      <input type="email" id="loginid2" placeholder="xyz@pqr.com" name= "loginid" title="Enter E-mail">
      
		<input type="password" name="pass" id="pass2" placeholder="Password" title="Enter Password">
     <center>   <table>
        <tbody>
        <tr>
        <td>
        <input type="checkbox" name="remember">
            </td><td><label><span>Remember Me on this PC for 1 Hour</span></label></td></tr></tbody></table></center>
        
		<input type="submit"  id="submit" name="submit" value="Login"  title="Click to Login">
	
      <p title="Create your Account">Not a member? <span>Sign Up</span></p>
      
      <a href="#" class="fp"><p title="Click here to reset your existing Password"><span>Forgot Password?</span></p></a>
      
        <?php
		  if($found == 'N')
		  {
		  	echo "<p>
			<font color='red'>
			
			<h4>Invalid Username or Password</h4>
			
			</font>
			</p>";
		  }
		  ?>
          
          </form>
    </div>
     </div>
   </div>
</body>
</html>