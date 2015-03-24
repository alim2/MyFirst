<?php
require_once("head_foot.php");
page_header("Login Page");

if(isset($_POST["Submit"]))
{
	$file = fopen("user.txt","r");
	
	while(! feof($file))
	{
		$nameinfo = trim(fgets($file));
		$passinfo = trim(fgets($file));
		$typeinfo = trim(fgets($file));
		$uname = explode(":", $nameinfo);
		$upass = explode(":", $passinfo);
		
		if( trim($_POST["uname"]) == trim($uname[1]) && trim($_POST["upass"]) == trim($upass[1]) )
		{
			fclose($file);
			$_SESSION["name"] = trim($uname[1]);
			$utype = explode(":", $typeinfo);
			if( trim($utype[1]) == "admin" )
				header("Location: admin.php");
			else
				header("Location: user.php");
		}
	}
	fclose($file);
	$msg = "wrong information";
}

?>

<form action="index.php" method="post">
	<table align="center" cellpadding="5">
		<tr>
			<td align="right"> Username : </td>
			<td> <input type="text" name="uname"/></td>
		</tr>
		<tr>
			<td align="right"> Password : </td>
			<td> <input type="password" name="upass"/> </td>
		</tr>
		<tr>
			<td align="right"> &nbsp; </td>
			<td> <input type="submit" name="Submit" value="Login"/></td>
		</tr>
		<?php
		if(isset($msg))
		{
			echo "<tr>	<td align=\"right\"> &nbsp; </td>	<td> <b><i>" . $msg ." </i></b> </td>	</tr>"; 
		}
		?>
	</table>
</form>

<?php

page_footer();
?>