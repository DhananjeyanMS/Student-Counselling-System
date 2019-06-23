<html>
<head>
    <title>Clglist</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .b {
    display: inline-block;
    position: relative;
    
    float: left;
    background-color: lightgrey;
    width: 300px;
    
    margin: 25px;
    
}
        h1{
            padding:25px;
        }
        .button {
          display: inline-block;
          border-radius: 4px;
          background-color: #f4511e;
          border: none;
          color: #FFFFFF;
          text-align: center;
          font-size: 28px;
          padding: 20px;
          width: 600px;
          transition: all 0.5s;
          cursor: pointer;
          margin: 5px;
        }

        .button span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
        }

        .button span:after {
          content: '\00bb';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
        }

        .button:hover span {
          padding-right: 25px;
        }

        .button:hover span:after {
          opacity: 1;
          right: 0;
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
    <h1> LIST OF COLLEGES </h1><br><br><br>
    <center>
            <a href="2114.php"><button class="button" style="vertical-align:middle" ><span> Panimalar Engineering College </span>
                </button></a><br><br>
        </center>
    <center>
            <a href="3123.php"><button class="button" style="vertical-align:middle" ><span>St. Joseph's College of Engineering </span>
                </button></a><br><br>
        </center>
   <center>
            <a href="2116.php"><button class="button" style="vertical-align:middle" ><span> Rajalakshmi Engineering College </span>
                </button></a><br><br>
        </center>
    </body>
</html>