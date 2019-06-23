<html>
<head>
    <title> Registration form </title>
    <link rel="stylesheet" href="style.css">
    <style>
table, th, td {
    border: 1px solid cyan;
    }
    table {
    width: 100%;
}

th {
    height: 50px;
}

 
</style>
</head>
<body>
    <div  class="unlist">
        
    <ul>
        <div class="list">
    <li><a href="home.php">HOME</a></li>
    
        </div>
            </ul><br>
    </div>
    


<?php
include("connect.php");
session_start();


$sql = "SELECT * FROM e3115";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table ><tr><th>NAME</th><th>FATHER'S NAME</th><th>TOTAL</th><th>CUTOFF</th><th>GROUP</th><th>GENDER</th><th>MOBILE NO</th><th>EMAILID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["fname"]. "</td><td> " . $row["total"]. "</td><td> " . $row["cutoff"]. "</td><td> " . $row["group"]. "</td><td> " . $row["gender"]. "</td><td> " . $row["mob"]. "</td><td> " . $row["email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


?> 

</body>
</html>