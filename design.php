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

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="menu-opener.js"></script>



<div class="box">    

        
     <style>
input[type=text] {
    width: 400px;
    box-sizing: border-box;
    border: 5px solid #ccc;
    border-radius: 6px;
    font-size: 12px;
    background-color: white;
    background-image: images/search.png;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 8px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 85%;
	
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

    box-shadow: 0 9px #999;
}
  
input[type=submit]:hover{
    background-color: #45a049;
	
	box-shadow: 0 4px rgba(0,0,0,0.4);
  transform: translateY(4px);
}
input[type=submit]:hover after{
    background-color: #45a049;
	
	box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
    <?php
	
	include("database.php");
$email = $_SESSION['email'];
	
echo'<center><table cellpadding="5" cellspacing="0" width="80%"><FORM NAME="XYZ"  ACTION ="design.php" method="post">
<tr><td>        <input type="text" name="search_item" id="search1" placeholder="Search by Designation">
        </td><td>
		<input type="submit" name="search" value="Search"></td>
        <td><input type="submit" name="show" value="Show All"></td</tr>
        </FORM>
</table></center>
		
		<center><table cellpadding="5" cellspacing="0" width="80%">
	     <tbody>
	<tr>
	
	<td>Employee Image</td>
	<td>Employee ID</td>
	<td>Employee Name</td>
	<td>Employee Age</td>
	<td>Employee Designation</td>
	<td>Employee Salary</td>
	
	</tr>';
	
if(!isset($_POST['search']) || isset($_POST['show']))
	{
	
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
	}
	else{
		$item =$_POST['search_item']; 

$rs=mysql_query("select*from ems_employee where emp_designation = '$item'");

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
}}
echo'</tbody>
	</table></center>';
	
	
	
    ?>
    
    
</div>
  </div>
       

</div>

<div class="parallax"></div>
 


</body>
</html>