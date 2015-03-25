<style type="text/css">
	
a{
	text-decoration: none;
}

</style>


<table  width="100%">
<tr valign="top">
	<td width="25%">
		<fieldset >
		<legend>Login </legend>
			<form action="index.php" method="post">
			<table>
			<tr>
				<td align="right">Student ID :</td>
				<td><input type="text" name="sid" /></td>
			</tr>
			<tr>
				<td align="right">Password :</td>
				<td><input type="password" name="pass" /></td>
			</tr>
			<tr>
				<td align="right">&nbsp;</td>
				<td>
				<input type="submit" name="lsb" value="Login"  />
				<br><br><a href="register.php">SignUp Now</a>
				</td>
			</tr>
			</table>
		</form>
		</fieldset>
	</td>
	<td>
		
	</td>
</tr>
</table>

<?php 
$userinfo = array();
if(isset($_POST["lsb"]))
{
	$con=mysql_connect("localhost","root","") or die ("Database not found");
	
	mysql_select_db("db",$con);

	$sid=mysql_real_escape_string(trim($_POST["sid"]));
	$pass=mysql_real_escape_string(trim($_POST["pass"]));

	//$sql="SELECT id,pass FROM user ";

	$rs = mysql_query("SELECT id,pass FROM user where id=$sid");

	//$row=0; // ???
	//$numrows=mysql_num_rows($result);

	//while($row = mysql_fetch_assoc($result))
	//{
    	//$id = $row["id"];
    	//$pass=$row["pass"];
	//$row++;
	//}
	//echo $id ."&nbsp&nbsp".  $pass;
	$nor = mysql_num_rows($rs); 
	echo $numFields."<br>";
	//statement

	$row = mysql_fetch_array($rs);
	echo $row["id"];
	mysql_close($con);

	//$q = "SELECT * FROM user WHERE id='$sid' AND pass='$pass' ";
	 //$rs = mysql_query($q);

	//echo $q;
}

?>

