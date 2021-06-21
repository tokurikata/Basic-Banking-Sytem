<?php
session_start();
$con=mysqli_connect('localhost','root','','basic_banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="styleshit" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background:url("images/bg.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#60007b;
		padding:50px;
		border:2px ridge #874a87;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#fffff;
	}
	.button:hover{
		background-color:#60007b;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Mussa"){
				 var arr=["Nipun","Rishabh","Pratik","Shubham","Lakhan","Pushpum","Mitul","Saket","Aniket"];
				 }
				 else if(a==="Nipun"){
					var arr=["Mussa","Rishabh","Pratik","Shubham","Lakhan","Pushpum","Mitul","Saket","Aniket"];
				}
				else if(a==="Rishabh"){
					var arr=["Mussa","Nipun","Pratik","Shubham","Lakhan","Pushpum","Mitul","Saket","Aniket"];
				}
				else if(a==="Pratik"){
					var arr=["Mussa","Nipun","Rishabh","Shubham","Lakhan","Pushpum","Mitul","Saket","Aniket"];
				 }
				 else if(a==="Shubham"){
					var arr=["Mussa","Nipun","Rishabh","Pratik","Lakhan","Pushpum","Mitul","Saket","Aniket"];
				 }
				 else if(a==="Lakhan"){
					var arr=["Mussa","Nipun","Rishabh","Pratik","Shubham","Pushpum","Mitul","Saket","Aniket"];
				 }
				 else if(a==="Pushpum"){
					var arr=["Mussa","Nipun","Rishabh","Pratik","Shubham","Lakhan","Mitul","Saket","Aniket"];
				 }
				 else if(a==="Mitul"){
					var arr=["Mussay","Nipun","Rishabh","Pratik","Shubham","Lakhan","Pushpum","Saket","Aniket"];
				 }
				 else if(a==="Saket"){
					var arr=["Mussa","Nipun","Rishabh","Pratik","Shubham","Lakhan","Pushpum","Mitul","Aniket"];
				 }
				 else if(a==="Aniket"){
				 var arr=["Mussa","Nipun","Rishabh","Pratik","Shubham","Lakhan","Pushpum","Mitul","Saket"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#i82i;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left" style="color: #ffffff">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Mussa">Mussa</option>
			<option value="Nipun">Nipun</option>
			<option value="Rishabh">Rishabh</option>
			<option value="Pratik">Pratik</option>
			<option value="Shubham">Shubham</option>
			<option value="Lakhan">Lakhan</option>
			<option value="Pushpum">Pushpum</option>
			<option value="Mitul">Mitul</option>
			<option value="Saket">Saket</option>
			<option value="Aniket">Aniket</option>
		</select><br><br>
		<label for="receiver" align="left" style="color: #ffffff">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left" style="color: #ffffff">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='white'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.html">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>