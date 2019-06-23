<?php
include("connect.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $uname = $_POST["college"];
    $pword = $_POST["pword"];

    $sql = "SELECT * FROM college WHERE college = '$uname' and password = '$pword'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);



    // If result matched $myusername and $mypassword, table row must be 1 row

    if(mysqli_num_rows($result))
    {
        $_SESSION["login"]="OK";
        $_SESSION["college"]=$uname;
        header("location: db.php");
    }
    else
    {
        echo "<script>
alert('Wrong Username or Password');
window.location.href='login.php';
</script>";
    }
}

?>
