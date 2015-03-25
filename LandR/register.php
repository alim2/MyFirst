<?php

if(isset($_POST["rsb"]))
{
	$con=mysql_connect("localhost","root","") or die ("Database not found");
	
	mysql_select_db("db",$con);
	
	$sid= trim($_POST["sid"]);
	$fname= trim($_POST["fname"]);
	$mname= trim($_POST["mname"]);
	$lname= trim($_POST["lname"]);
	$pass= trim($_POST["pass"]);
	$email= trim($_POST["email"]);
	$dept= trim($_POST["dept"]);
	$gender= trim($_POST["g"]);
	
	$q = "INSERT INTO user VALUES('$sid','$fname','$mname','$lname','$pass','$email','$dept','$gender')";

	//$qry = "insert into contactus(name,email,subject,message) values('$name','$email','$subject','$message')";
	
	if(mysql_query($q))
		echo "<div>Registration ok</div>";
		
		else 
		echo "<div>Check information</div>";
	mysql_close($con);
}

?>

<!--<script>
function myAlert() 
{

    alert("Hello! I am an alert box!");
}
</script>-->

<style type="text/css">
	li{
		list-style-type: none;
	}
	a{
		text-decoration: none;
	}
</style>

<fieldset>
		<legend>Registration</legend>
		<form action="index.php" method="post">
		<ul>
			<li>
				Student ID :<br>
				<input type="text" name="sid" />
			</li>	

			<li>
				<br>
				First Name :<br>
				<input type="text" name="fname" />
			</li>

			<li>
				<br>
				Middle Name :<br>
				<input type="text" name="mname" />
			</li>

			<li>
				<br>
				Last Name :<br>
				<input type="text" name="lname" />
			</li>

			<li>
				<br>
				Password :<br>
				<input type="password" name="pass" />
			</li>

			<li>
				<br>
				Confirm Password :<br>
				<input type="password" name="cpass" />
			</li>

			<li>
				<br>
				Email :<br>
				<input type="text" name="email" />
			</li>

			<li>
			             <br>
				Dept :
					<select name="dept">
						<option value="CS">CS</option>
						<option value="SE">SE</option>
						<option value="CSSE">CSSE</option>
						<option value="CSE">CSE</option>
						<option value="EEE">EEE</option>
						<option value="BBA">BBA</option>
					</select>
			</li>

			<li>
				<br>
				Gender : <input type="radio" name="g" value="0" /> Male&nbsp;
					   <input type="radio" name="g" value="1" /> Female
			</li>

			<li>
				<br>
				<input type="submit" name="rsb" value="Register" onclick="myAlert() " />
				<br><br><a href="index.php">Have Any Account?</a>
			</li>
		</ul>
		</form>
		</fieldset>