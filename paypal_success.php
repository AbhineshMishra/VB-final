<?php
        require_once('auth.php');
?>

<head>

</head>

<?php
        //Start session
        session_start();
        require_once('connection.php');
?>
<?php
	$u_email = $_SESSION['SESS_MEMBER_ID'];
//	$u_email = "goto122@gmail.com";
//	$u_email ="we22lll@gmail.com";
?>
<body bgcolor="red">
<?php require_once('menu.php'); ?>

	<form id="paypal_success" name="paypal_success" method="post" action="customer_dashboard.php">
	<table style="width:75%;margin-top:125px;margin-left:200px">
	<tr>
	<td>
	<p><div align="center" style="margin-top:30px">
	<font color="#242A56">
	<h2><u>Payment Successful !!!</u></h2></p>
	</div>	
	</td>
	</tr>
	<tr>
	<td>
	<input type="submit" name="paypal_s" value=" Click here to go to your Dashboard ">
	</td>
	</tr>
	</table>
        </form>



</body>
