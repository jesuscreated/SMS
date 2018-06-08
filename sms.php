<?php 
if(isset($_POST['abc'])){ 
$username = $_POST['username']; 
$hash = $_POST['hash']; 
$test = "0"; 
$sender = $_POST['sender']; 
$numbers = $_POST['num'];
$message = $_POST['mess']; 
$message = urlencode($message); 
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test; 
$ch = curl_init('example'); 
curl_setopt($ch, CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$result = curl_exec($ch); 
curl_close($ch); 
echo($result); 
} 
?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='icon' href='logo.jpg' type='image/x-icon'>
<title>Metori</title>
</head>
<body>
<style>
*{
padding: 0; 
margin: 0;
font-family: sans-serif; 
}
header { 
	width: 100%; 
	height: auto; 
	margin: auto;
	background:#F9F9F9;
}
header div{
	text-align: center;
}
header img{
height:50px;
width:auto;
}
.string{
 height:5px;
 width:100%;
 background:orange;
 background-repeat: no-repeat;
background-size: cover;
background-position: center;
animation: slide 40s infinite;	
text-align:center;
   
		animation: slide 40s infinite;
 }
					@keyframes slide{
			0%{
		background:red;
		}
			20%{
		background:orange;
			}
			20.01%{
		background:yellow;
		}
			40%{
		background:green;
		}
				40.01%{
		background:#00FFFF;
		}
			60%{
		background:blue;
			}
			60.01%{
		background:purple;
		}
			80%{
		background:red;
		}
				80.01%{
		background:orange;
		}
					100%{
		background:yellow;
		}
					}
		form{
		margin-top:200px;
		margin-left:625px;
		}
		.button{
		outline:none;
		border:none;
		width:100px;
		height:auto;
		}
		.button:hover{
		background:gray;
		color:white;
		}
	.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background:grey;
    color: white;
    text-align: center;
		}
					
</style>
<header>
<div>
<img src='logo.jpg'/>
</div>
</header>
<div class='string'></div>
<form method="post" action="sms.php">
<table align="center">
<tr>
<td>Username</td>
<td><input type="text" name="username" placeholder="Enter your username"></td>
</tr>
<tr>
<td>Hash</td>
<td><input type="text" name="hash" placeholder="Enter your hash key"></td>
</tr>
<tr>
<td>Sender</td>
<td><input type="text" name="sender" placeholder="Enter your name"></td>
</tr>
<tr>
<td>Number</td>
<td><input type="text" name="num" placeholder="Enter your number"></td>
</tr>
<tr>
<td>Message</td>
<td><textarea name="mess" placeholder="Enter your message"></textarea></td>
</tr>
<tr>
<td></td>
<td><input class='button' type="submit" name="abc" value="send"></td>
</tr>
</table>
</form>
<div class="footer">
  <p>Designed by Martin Metori</p>
</div>
</body>
</html>
