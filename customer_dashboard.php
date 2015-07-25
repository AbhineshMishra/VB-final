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
<p><div align="center" style="margin-top:30px">
<font color="#242A56">
<h2>-: <u>Dashboard</u> :-</h2></p>
</div>
<?php
	$qry = "SELECT * FROM customer_purchases WHERE user_email = '$u_email' AND (product_bought = 'Basic Astro Consulting with 3 Questions' ".
 	"OR product_bought = 'Annual subscription (time to time)' OR product_bought = 'Family Consulting') ORDER BY date_bought DESC"; 
        $result = mysql_query( $qry);
        if(! $result )
        {
                die('Could not get data: ' . mysql_error());
        }
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	if ($row['purchase_id'] != "") {
	$i=0;
	?>
	<table border="2" style="width:75%;margin-top:25px;margin-left:200px">
        <tr>
        <th id="date_bought">Date Bought</th>
        <th id="prod_name">Product Name</th>
        <th id="bought_for">Bought For</th>
        <th id="view"></th>
	</tr>
<?php
	if ($row['product_bought'] == "Basic Astro Consulting with 3 Questions") {
		$redirectpage = "customer_questions.php";	
	} elseif ($row['product_bought'] == "Annual subscription (time to time)") {
		$redirectpage = "customer_annual_subscription.php";	
	} elseif ($row['product_bought'] == "Family Consulting") {
		$redirectpage = "customer_family_consulting.php";	
	}
	
	if ($row['availed']) {
		$button_name = " View ";
	} else {
		$button_name = " Avail ";
	}
?>
	<form id="view_status<?php echo $i; ?>" name="view_status<?php echo $i; ?>" method="post" action="<?php echo $redirectpage; ?>">
	<tr>
	<td>
<?php
	$dt = explode(" ",$row['date_bought']);
        echo $dt[0];
?>
	</td>
        <td>
<?php
        echo $row['product_bought'];
?>
        </td>
        <td>
<?php
        echo $row['bought_for'];
?>
	</td>
        <td>
        <input type="submit" name="<?php echo $button_name; ?>" value=" <?php echo $button_name; ?> ">
        </td>
        </tr>
                <input type="hidden" id="date_bought" name="date_bought" value="<?php echo $row['date_bought']; ?>">
                <input type="hidden" id="purchase_id" name="purchase_id" value="<?php echo $row['purchase_id']; ?>">
                <input type="hidden" id="bought_for" name="bought_for" value="<?php echo $row['bought_for']; ?>">
                <input type="hidden" id="availed" name="availed" value="<?php echo $row['availed']; ?>">
        </form>
<?php
	
        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
        {
		++$i;
        	if ($row['product_bought'] == "Basic Astro Consulting with 3 Questions") {
                	$redirectpage = "customer_questions.php";
        	} elseif ($row['product_bought'] == "Annual subscription (time to time)") {
                	$redirectpage = "customer_annual_subscription.php";
       		} elseif ($row['product_bought'] == "Family Consulting") {
                	$redirectpage = "customer_family_consulting.php";
        	}

        	if ($row['availed']) {
                	$button_name = " View ";
        	} else {
                	$button_name = " Avail ";
        	}
?>	
		<form id="view_status<?php echo $i; ?>" name="view_status<?php echo $i; ?>" method="post" action="<?php echo $redirectpage; ?>">
		<tr>
		<td>
	<?php	
		$dt = explode(" ",$row['date_bought']);
		echo $dt[0];
	?>
		</td>
		<td>
	<?php 	
		echo $row['product_bought'];
	?>
		</td>
		<td>
	<?php
		echo $row['bought_for'];
	?>
		</td>
		<td>
        	<input type="submit" name="<?php echo $button_name; ?>" value=" <?php echo $button_name; ?> ">        
		</td>
		</tr>
                <input type="hidden" id="date_bought" name="date_bought" value="<?php echo $row['date_bought']; ?>">
                <input type="hidden" id="purchase_id" name="purchase_id" value="<?php echo $row['purchase_id']; ?>">
                <input type="hidden" id="bought_for" name="bought_for" value="<?php echo $row['bought_for']; ?>">
                <input type="hidden" id="availed" name="availed" value="<?php echo $row['availed']; ?>">
		</form>
	<?php
        	}
	}
	?>
<tr>


</tr>

</table>
</body>
