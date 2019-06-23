<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="style.css">
    <style>
        td{
            padding: 10px;
        }
        body{
            
            background-repeat: no-repeat;
            color: white;
            background-color: darkblue;
            background-size: cover;
        }
        table, th, td {
    border: 1px solid cyan;
    }
    table {
    width: 50%;
        padding-left: 200;
}

th {
    height: 100px;
}

    </style></head>
    
<body>
    <div  class="unlist">
        
    <ul>
        <div class="list">
            <li><a href="home.php">Home</a></li>
            </div>
            </ul>
</div>
<br><br>
<h1 style="margin-left:45px;"><b>REGISTER</b></h1>
    <?php
include("connect.php");
session_start();


$sql1 = "SELECT cn FROM college WHERE college='2114'";
$result = $con->query($sql1);
$data = mysqli_fetch_array($result);

    echo "<h3>COUNT OF SEATS LEFT :".$data['cn']."</h3><br/><br/>";
        /*echo "---------------------------- <br/>";*/
?> 

<form name="form" method="post" action="2114regconnect.php">
<table style="padding: 10px;">  <tr><td><b>NAME:</b></td>
    <td><input type="text" name="name" id="name"/></td></tr>

<tr><td><b>FATHER'NAME:</b></td><td>
    <input type="text" name="fname" id="fname"/></td></tr>
  
 <tr><td>   <b>TOTAL:</b></td><td>
     <input type="text" name="total" id="total"/></td></tr>

 <tr><td><b> CUTOFF:</b></td><td>
     <input type="text" name="cutoff"/></td></tr>
    <tr><td><b> GROUP:</b></td><td>
     <input type="text" name="group"/></td></tr>

  <tr><td><b>GENDER:</b></td><td>
  <input type="radio" name="gender" value="Male" id="gender" checked/>Male
      <input type="radio" name="gender" id="gender" value="Female"/>Female</td></tr>
    
    <tr><td><b>CONTACT-NO:</b></td><td>
      <input type="text" name="mob" id="mob"/></td></tr>
 
  
  <tr><td><b>e-MAIL ID:</b></td><td>
      <input type="email" name="email" id="email"/></td></tr>

  
   
  
    
 </table>
 
  <input  class="button" style="margin-left:70px;" type="submit" value="SUBMIT"/>
  <input  class="button" style="margin-left:20px;" type="reset"  value="CLEAR"/>
    
</form>
   
</body>
</html>
