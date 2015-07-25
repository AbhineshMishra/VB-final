<head>
</head>
<body bgcolor="red">
<table border="0" style="width:75%;margin-top:25px;margin-left:200px">
<tr>
<td><u><font color="darkblue">
Hello </font><font color="cyan"><?php   $user_first_name = explode("@",$_SESSION['SESS_MEMBER_ID']); 
				      echo $user_first_name[0]." !!! "; ?> </font>
</u></td>
<td align="left">
<img border="0" hspace="100" alt="VedicBaba.jpg" hspace="90" src="VB.jpg" width="200" height="40" >
</td>
</tr>
</table>
<hr style="width:75%;margin-top:0px;margin-left:200px">
<table border="0" style="width:75%;margin-top:25px;margin-left:200px">
<tr>
<td>
<table border="2">
<tr>
<td>
<a href="http://10.16.78.11/customer_dashboard.php">Dashboard</a>
</td>
<td>
<a href="http://10.16.78.11/products.php">Buy Products</a>
</td>
<td>
<a href="http://10.16.78.11/update_information.php">Update Information</a>
</td>
<td>
<a href="http://10.16.78.11/products.php">Change Password</a>
</td>
</tr>
</table>
</td>
<td>
<table border="2">
<tr>
<td align="right">
<a href="index.php">Logout</a>
</td>
</tr>
</table
</td>
</tr>
</table>
</body>
