<?php
include("connect.php");
$f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=" ";
if($_SERVER['REQUEST_METHOD']=="POST")
{ 
      $f1=$_POST["name"];
     $f2=$_POST["fname"];
     $f3=$_POST["total"];
     $f4=$_POST["cutoff"];
     $f5=$_POST["group"];
     $f6=$_POST["gender"];
     $f7=$_POST["mob"];
     $f8=$_POST["email"];
           
     $sql="INSERT INTO e3115 VALUES ('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8');";
    
      if(mysqli_query($con,$sql))
    {
        $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=" ";
          
      }
    $query3="UPDATE college SET cn = cn - 1 WHERE college= '2114';";
  if(mysqli_query($con,$query3))
     {
     echo "<script>
    alert('successfully updated');
    </script>"; 
       header("Location:end.php");
  }
   
    
   
   }


?>
    