<?php
session_start();
?>
<!DOCTYPE html PUBLIC "Employee Managememnt System" >
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Employee Management System | Modify the details of Employee</title>


 
</head>
<?php

if(isset($_POST['submit']))
{
	require 'database.php';
$id=$_POST['id'];
$pic=$_POST['pic'];
$name=$_POST['name'];
$age=$_POST['age'];
$design=$_POST['design'];
$salary=$_POST['salary'];

$query = mysql_query("UPDATE ems_employee SET emp_pic='$pic',emp_name= '$name',emp_age='$age', emp_designation='$design',emp_salary= '$salary' where emp_id='$id'")or die("" . mysql_error());


if($query)
{
print '<script type="text/javascript">'; 
print 'alert("Detail modified Successfully....Press OK to Continue....")';
print '</script>'; 
	
}
else
{
	print '<script type="text/javascript">'; 
    print 'alert("Detail not modified Successfully")'; 
    print '</script>'; 
	
}


}
?>

<link href="style.css" rel="stylesheet" type="text/css">

<body id="header">

<div class="text1">


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
  
  <style>
input[type=text], select {
    padding: 14px 20px;
    margin: 8px 0;	
	background:rgba(0,0,0,0.5);
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
	color:#FFF;
    box-sizing: border-box;
}
input[type=text]:hover {
    padding: 14px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background:inherit;
}
input[type=file], select {
    padding: 14px 20px;
    margin: 8px 0;
	background:rgba(0,0,0,0.5);
	width:100%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=file]:hover{
    padding: 14px 20px;
	background:inherit;
    margin: 8px 0;
	width:100%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
<div class="box">

   <img src="New folder/logo.png" width="200" height="180"> 
      <h1>Modify the details of existing Employee</h1>
    <center> <form method="post">
        <table width="80%" cellpadding="10">
  <tbody>
  
  <tr>
  
  <td>
  <label for="id"> Employee ID :</label><br>   <input type="text" name="id" maxlength="100" size="42" /> 
 
  </td>
     
  <td >
   <label for="pic1"> Employee Photograph : </label>
  <br> 
 <input type="file" name="pic" value="choose file">
    
     
  </td>
  
  <td>
<label for="age"> Age :  </label> <br>    
  <input type="text" name="age" maxlength="10" size="42"/>
     
   
       </td>
 
  </tr>
     
  <tr>
          
  <td>
      <label for="name"> Name (Mr./Mrs./Ms./Er.) :</label><br>   <input type="text" name="name" maxlength="100" size="42" />
    
      </td>
        
  <td >
        
<label for="designation"> Designation :  </label> <br>     <input type="text" name="design" maxlength="100" size="42"/>

        </td>
              
  <td>
     <label for="salary"> Salary :  </label> <br>     
 <input type="text" name="salary" maxlength="10" size="42"/>
     
       </td>
 
        
        </tr>  
        </tbody></table>
  <input name="submit" type="submit" value="Modify">
        
        </form>
</center>
</div>

</div>

</body>
</html>