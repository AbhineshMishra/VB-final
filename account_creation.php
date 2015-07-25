<head>
<title> Vedic Baba </title>
</head>
<?php
        //Start session
        session_start();
        //Unset the variables stored in session
        unset($_SESSION['SESS_MEMBER_ID']);
        unset($_SESSION['SESS_FIRST_NAME']);
        unset($_SESSION['SESS_LAST_NAME']);
?>
<script>
function ValidateForm(form)
{
var inputText = form.user_email_creation.value;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

if(inputText == "")
{
alert("Username cannot be empty");
form.user_email_creation.focus();
return false;
}

if(!inputText.match(mailformat))
{
alert("You have entered an invalid email address!");
form.user_email_creation.focus();
return false;
}

var pwd = form.user_password_creation.value;
var cnfm_pwd = form.user_password_confirm.value;

if(pwd == "" || cnfm_pwd == "")
{
alert("Password fields cannot be left empty");
form.user_password_creation.focus();
form.user_password_confirm.focus();
return false;
}

if (pwd != cnfm_pwd) {
alert("The password fields do not match");
form.user_password_creation.focus();
form.user_password_confirm.focus();
return false;
}

if (pwd == inputText) {
alert("Username and Password cannot be same");
form.user_email_creation.focus();
form.user_password_creation.focus();
return false;
}

if(form.user_password_creation.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.user_password_creation.focus();
        return false;
      }

}
</script>

<body bgcolor="red">
<p><div align="center" style="margin-top:30px">
<font color="#242A56">
<h2>-: <u>Register</u> :-</h2></p>
</div>
<form  id="account_creation" name ="account_creation" method="post" action="customer_registration.php" onsubmit="return ValidateForm(this)">
<table border="2" style="width:75%;margin-top:20px;margin-left:200px">
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
<td>
Email Address
</td>
<td>
<input type="text" name="user_email_creation" id="user_email_creation" style="width:100%" placeholder="Email Address">
</td>
</tr>
<tr>
<td>
Password
</td>
<td>
<input type="password" name="user_password_creation" id="user_password_creation" style="width:100%" placeholder="Password">
</td>
<tr>
<td>
Confirm Password
</td>
<td>
<input type="password" name="user_password_confirm" id="user_password_confirm" style="width:100%" placeholder="Password">
</td>
</tr>
<tr>
<td>
Security Question
</td>
<td>
<select name="user_security_question">
	<option value="What is your mother maiden name">What is your mother maiden name</option>
	<option value="Which year did you buy your first car">Which year did you buy your first car</option>
	<option value="Who is your favourite sportsperson">Who is your favourite sportsperson</option>

</select>
</td>
</tr>
<tr>
<td>
Security Answer
</td>
<td>
<input type="password" name="user_security_answer" id="user_security_answer" style="width:100%">
</td>
</tr>
</table>
<table style="width:75%;margin-top:20px;margin-left:200px">
<tr>
<td align="right">
<input name="account_create" type="submit" value="Next" onclick="ValidateEmail(document.account_creation.user_email_creation)"/>
</td>
</tr>
</body>




