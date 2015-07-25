<?php
        require_once('auth.php');
?>

<head>

</head>
<?php
        //Start session
        session_start();
        require_once('connection.php');
	$u_email = $_SESSION['SESS_MEMBER_ID'];
?>
<body bgcolor="red">
<?php require_once('menu.php'); ?>
<p><div align="center" style="margin-top:30px">
<font color="#242A56">
<h2>-: <u>Dashboard</u> :-</h2></p>
</div>
