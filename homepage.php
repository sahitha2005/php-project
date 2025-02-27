<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME PAGE</title>
	<style >
		body{
			margin: 0px;
			padding: 0px;
		}
		#container{
			width: 100%;
			background-color: gray;
		}
		#con1{
			height: 20px;
			background-color: lightpink;
		}
		#con2{
			height: 80px;
			background-color: lightblue;

		}
		.links a{
			margin: 0 15px;
			text-decoration: none;
			color: black;
			font-weight: bold;

		}
	</style>
</head>
<body>
    <div id="container">
    	<center>
    	<div id="con1"><h3>WELCOME TO HOME PAGE</h3></div>
   
        <div id="con2">
        	<div class="links">
        		<a href="login.php">LOGIN</a>
        		<a href="personal.php">PERSONAL DETAILS</a>
        		<a href="logout.php">LOGOUT</a>
        	</div>
        </div></center>
        <img src="collegephoto.jpg" width="100%" height="500px"></img>
    </div>
</body>
</html>