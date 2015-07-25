<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>
<script>

function ValidateFrm()  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
var inputText = document.loginform.username.value;
if(!inputText.match(mailformat))  
{  
alert("You have entered an invalid email address!");  
document.loginform.username.focus();  
return false;  
}  

if(document.loginform.password.value == "") {
document.loginform.password.focus();
alert("Please key in your password");
return false;
}

if(document.loginform.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        document.loginform.password.focus();
        return false;
      }
return true;
}  

</script>

<body bgcolor="red">
<form name="loginform" action="login_exec.php" method="post" onsubmit="return ValidateFrm();">
<table width="309" border="3" cellspacing="5" style="width:45%;margin-top:200px;margin-left:300px">
<tr><td>
<table width="309" border="0" cellspacing="5" style="width:100%;margin-top:0px;margin-left:0px">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <tr>
    <td width="116"><div align="center">Username :-</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="center">Password :-</div></td>
    <td><input name="password" type="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login"/></td>
  </tr>
</table>
</td>
</tr>
</table>
</form>
</body>
