<?php
        //Start session
        session_start();
        require_once('connection.php');

	$question1 = $_POST['question1'];
	$question2 = $_POST['question2'];
	$question3 = $_POST['question3'];
	$purchase_id = $_POST['purchase_id'];
        $user_email = $_SESSION['SESS_MEMBER_ID'];
	$result_array = array();
	$qry = "INSERT INTO question_answer VALUES ('', '$user_email', '$question1', '', $purchase_id)";
	$result_array[]=mysql_query($qry);
	echo "inerted";
	$qry = "INSERT INTO question_answer VALUES ('', '$user_email', '$question2', '', $purchase_id)";
	$result_array[]=mysql_query($qry);
	$qry = "INSERT INTO question_answer VALUES ('', '$user_email', '$question3', '', $purchase_id)";
	$result_array[]=mysql_query($qry);

	if ($_POST['question4'] != "") {
        $question4 = $_POST['question4'];
	$qry = "INSERT INTO question_answer VALUES ('', '$user_email', '$question4', '', $purchase_id)";
        $result_array[]=mysql_query($qry);
	}

        if ($_POST['question5'] != "") {
        $question5 = $_POST['question5'];
        $qry = "INSERT INTO question_answer VALUES ('', '$user_email', '$question5', '', $purchase_id)";
        $result_array[]=mysql_query($qry);
        }

        $qry = "UPDATE customer_purchases set availed = 1 WHERE purchase_id = '$purchase_id'";
        $result_array[]=mysql_query($qry);

        $result_len = count($result_array);
        $found_error = 0;
        for($i=0;$i<$result_len;$i++) {
                if(!$result_array[$i]) {
                        $found_error = 1;
                }
        }

        if ($found_error) {
                        $errmsg_arr[] = 'data entry failed';
                        $errflag = true;
                        if($errflag) {
                                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                                session_write_close();
                                header("location: customer_questions.php");
                                exit();
                        }
        } else {

                        session_regenerate_id();
                        $_SESSION['SESS_MEMBER_ID'] = $user_email;
                        session_write_close();
                        header("location: customer_dashboard.php");
                        exit();
        }
?>

