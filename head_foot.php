<?php
session_start();
function page_header($title)
{
?>
<html>
	<head>
		<title> <?=$title?> </title>
	</head>
	<body>
		<table align="center" width=80%>
			<tr>
				<td align="center"> <h2>Bank Management System</h2> <hr/> </td>
			</tr>
			
			<tr>
				<td>
				
<?php
}
function page_footer()
{
?>
				
				</td>
			</tr>
			
			<tr>
				<td align="center"> <h4><i>Bank System, 2015</i></h4> </td>
			</tr>
		</table>		
	</body>
</html>
<?php
}
?>