<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{ 
    
   if($conn = mysqli_connect('localhost','root','','datadb'))
   {  $f1=$f2=$f3="";

     $f1=$_POST["username"];
     $f2=$_POST["regno"];
     $f3=$_POST["cutoff"];
        
       
     $sql= "INSERT INTO general (name,regno) VALUES ('$f1','$f2');";
    
      if(mysqli_query($conn,$sql))
    {
        $f1=$f2=" ";}
              
      }
    else
    {echo '<script language="javascript">';
echo 'alert("Error3")';
echo '</script>';
    }
    
 if($f3<=180)
 {
     echo "<script>
alert('SIGN-UP SUCCESSFUL');
window.location.href='b180.php';
</script>";
 }
else{
     echo "<script>
alert('SIGN-UP SUCCESSFUL');
window.location.href='a180.php';
</script>";
}
   $conn->close();
   }
    else
    {echo '<script language="javascript">';
echo 'alert("Error2")';
echo '</script>';
    }
 
    
    


     





?>