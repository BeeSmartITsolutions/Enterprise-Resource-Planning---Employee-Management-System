<?php
session_start();
?>
<!DOCTYPE html PUBLIC "Employee Managememnt System" >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee Management System | Welcome</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


<script src="jQuery-2.1.3.min.js"></script>
<script type="text/javascript">
$(function() {
	 
	  setTimeout(function(){
		  
		     $(".fly-in-text").removeClass("hidden");
		  
		  }, 500);
	
	} )();
</script>
<style>
body,html{
	height:100%; !important 
}
</style>

<body>

<div class="parallax"></div>

<div class="text3">
  <nav class="menu-opener">
    <div class="menu-opener-inner"></div>
  </nav>
  <nav class="menu">
    <ul class="menu-inner">
     <a href="index.php" class="menu-link">
        <li>Home</li>
      </a>
      <a href="addnew.php" class="menu-link">
        <li>Add new Employee</li>
      </a>
      <a href="delete.php" class="menu-link">
        <li>Delete an Employee Detail</li>
      </a>
      <a href="modify.php" class="menu-link">
        <li>Modify the details of existing Employee</li>
      </a>
       <a href="signout.php" class="menu-link" title="Want to Logout? Click Here...."> 
       <li>Signout</li>
       </a>
    </ul> 
  </nav>

<nav class="side" style="width:0px">
<ul>
  <li><a class="w3-padding-16" href="design.php"><i class="fa fa-home w3-xxlarge"></i></a></li><br><br>

<li>  <a class="w3-padding-16" href="salary.php"><i class="fa fa-money w3-xxlarge"></i></a></li>
</ul>
</nav>

<br><br><br>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="menu-opener.js"></script>



<div class="box">    

        <ul class="fly-in-text hidden">
        <li>W</li>
        <li>E</li>
        <li>L</li>
        <li>C</li>
        <li>O</li>
        <li>M</li>
        <li>E</li>

<?php
if($_SESSION["email"]=$loginid)
{
include("database.php");
$email = $_SESSION['email'];
		$rs1=mysql_query("select*from ems_login where email='$email'");
		while ($row = mysql_fetch_array($rs1)) {
			
			echo "<br><li><marquee>".strtoupper($row['user_name'] )." [ You are " .$row['designation']." ]</marquee></li>";	
		}
		?> 
    </ul>
     
    <?php
echo'<center><table cellpadding="5" cellspacing="0" width="80%">
	     <tbody>
	<tr>
	
	<td>Employee Image</td>
	<td>Employee ID</td>
	<td>Employee Name</td>
	<td>Employee Age</td>
	<td>Employee Designation</td>
	<td>Employee Salary</td>
	
	</tr>';
	

$rs=mysql_query("select*from ems_employee");

while ($row = mysql_fetch_array($rs)) {
	$img = $row['emp_pic'];
	
	echo'<tr>
	
	<td><img width="60px" height="65px" src="data:image/jpeg;base64,'.base64_encode ( $img ).'"/></td>
	<td>'.$row['emp_id'].'</td>
	<td>'.$row['emp_name'].'</td>
	<td>'.$row['emp_age'].'</td>
	<td>'.$row['emp_designation'].'</td>
	<td>'.$row['emp_salary'].'</td>
	
	</tr>';	
}
echo'</tbody>
	</table></center>';
}
else{
	header("Location: index.php");
}
    ?>
    
    
</div>
  </div>
       

</div>

<div class="parallax"></div>
 


</body>
</html>