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
//        $u_email = "goto122@gmail.com";
//      $u_email ="we22lll@gmail.com";
	$purchase_id = $_POST['purchase_id'];
?>

<script type="text/javascript">
function validateForm() {

    if (document.getElementById("question1").value == "") {
        alert("Question 1 is mandatory. Kindly fill it");
        return false;
    } else if (document.getElementById("question2").value == "") {
        alert("Question 2 is mandatory. Kindly fill it");
        return false;
    } else if (document.getElementById("question3").value == "") {
        alert("Question 3 is mandatory. Kindly fill it");
        return false;
    } 
  }

</script>
<body bgcolor="red">
<?php require_once('menu.php'); ?>
<p><div align="center" style="margin-top:30px">
<font color="#242A56">
<h2>-: <u>Your Questions</u> :-</h2></p>
</div
<hr style="width:75%;margin-top:10px;margin-left:200px">
<?php
	if (!$_POST['availed']) {
?>		
		<form id="customer_questions" name="customer_questions" method="post" action="customer_questions_exec.php" onsubmit="return validateForm();">
		<table border="0" style="width:75%;margin-top:25px;margin-left:200px">
		<tr>
		<td>
		Question -1 
		</td>
		<td>
		<textarea name="question1" id="question1" placeholder="Text max 500" rows="4" cols="50"></textarea>*
		</td>
		</tr>
                <tr>
                <td>
                Question -2
                </td>
                <td>
                <textarea name="question2" id="question2" placeholder="Text max 500" rows="4" cols="50"></textarea>*
                </td>
                </tr>
                <tr>
                <td>
                Question -3
                </td>
                <td>
                <textarea name="question3" id="question3" placeholder="Text max 500" rows="4" cols="50"></textarea>*
                </td>
                </tr>
                <tr>
                <td>
                Question -4
                </td>
                <td>
                <textarea name="question4" id="question4" placeholder="Text max 500" rows="4" cols="50"></textarea>
                </td>
                </tr>
                <tr>
                <td>
                Question -5
                </td>
                <td>
                <textarea name="question5" id="question5" placeholder="Text max 500" rows="4" cols="50"></textarea>
                </td>
                </tr>
		</table>
		<table border="0" style="width:50%;margin-top:25px;margin-left:200px">
		<tr>
		<td align="center">
		<input type="submit" value="Submit Your Questions">
		</td>
		</tr>
		</table>
		<input type="hidden" id="purchase_id" name="purchase_id" value="<?php echo $purchase_id; ?>">

		</form>	

	
<?php
	} else {

        	$qry = "SELECT * FROM question_answer WHERE purchase_id = $purchase_id";
       		$result = mysql_query( $qry);
        	if(! $result )
      		{
                	die('Could not get data: ' . mysql_error());
        	}
		$i = 1;
        	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
        	{
?>
			<table border="0" style="width:75%;margin-top:25px;margin-left:200px">
                	<tr>
                	<td>
			Question - <?php echo $i; ?>
			</td>
			<td>
			<textarea name="question - <?php echo $i; ?>" id="question - <?php echo $i; ?>" rows="4" cols="50" readonly="readonly"><?php echo $row['question']; ?></textarea>
                	</td>
                        <td>
                        Answer - <?php echo $i; ?>
                        </td>
                        <td>
                        <textarea name="answer -<?php echo $i; ?>" id="answer -<?php echo $i; ?>" rows="4" cols="50" readonly="readonly"><?php echo $row['answer']; ?></textarea>
                        </td>	
			</tr
			</table>          
<?php
			$i++;
        	}


	}
?>

</body>
