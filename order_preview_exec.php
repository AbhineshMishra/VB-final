<?php
        //Start session
        session_start();
        require_once('connection.php');
	$user_email = $_SESSION['SESS_MEMBER_ID'];
//	$user_email = "goto122@gmail.com";
	$result_array = array();
	if ($_POST['basic_astro'] != "") {
		$product_bought = $_POST['basic_astro']; 
		$amount = $_POST['basic_astro_amount'];
		$bought_for = $_POST['basic_astro_bought_for'];
		$relationship_with_user = $_POST['basic_astro_hidden'];
		$bought_for_chunks = explode(" ",$bought_for);
		$relationship_with_user_chunks = explode(" ",$relationship_with_user);
		for ($i=0;$i<count($bought_for_chunks)-1;$i++) {
			$rel_name = $bought_for_chunks[$i];
			$relation = $relationship_with_user_chunks[$i];
			$qry = "INSERT INTO customer_purchases VALUES ('', '$user_email', '$product_bought', '$amount', now(), ".
				"'$rel_name', '$relation', 0)";
			$result_array[] = mysql_query($qry);
		}
	$_SESSION['basic_astro_product'] = $product_bought;
	$_SESSION['basic_astro_amount'] = $amount;
	}

        if ($_POST['detailed_astro'] != "") {
                $product_bought = $_POST['detailed_astro'];
                $amount = $_POST['detailed_astro_amount'];
                $bought_for = $_POST['detailed_astro_bought_for'];
                $relationship_with_user = $_POST['detailed_astro_hidden'];
                $bought_for_chunks = explode(" ",$bought_for);
                $relationship_with_user_chunks = explode(" ",$relationship_with_user);
                for ($i=0;$i<count($bought_for_chunks)-1;$i++) {
                        $rel_name = $bought_for_chunks[$i];
                        $relation = $relationship_with_user_chunks[$i];
                        $qry = "INSERT INTO customer_purchases VALUES ('', '$user_email', '$product_bought', '$amount', now(), ".
                                "'$rel_name', '$relation', '0')";
                        $result_array[] = mysql_query($qry);
                }
        }

        if ($_POST['love_marriage'] != "") {
                $product_bought = $_POST['love_marriage'];
                $amount = $_POST['love_marriage_amount'];
                $bought_for = $_POST['love_marriage_bought_for'];
                $relationship_with_user = $_POST['love_marriage_hidden'];
                $bought_for_chunks = explode(" ",$bought_for);
                $relationship_with_user_chunks = explode(" ",$relationship_with_user);
                for ($i=0;$i<count($bought_for_chunks)-1;$i++) {
                        $rel_name = $bought_for_chunks[$i];
                        $relation = $relationship_with_user_chunks[$i];
                        $qry = "INSERT INTO customer_purchases VALUES ('', '$user_email', '$product_bought', '$amount', now(), ".
                                "'$rel_name', '$relation', '0')";
                        $result_array[] = mysql_query($qry);
                }
        }

        if ($_POST['child_consulting'] != "") {
                $product_bought = $_POST['child_consulting'];
                $amount = $_POST['child_consulting_amount'];
                $bought_for = $_POST['child_consulting_bought_for'];
                $relationship_with_user = $_POST['child_consulting_hidden'];
                $bought_for_chunks = explode(" ",$bought_for);
                $relationship_with_user_chunks = explode(" ",$relationship_with_user);
                for ($i=0;$i<count($bought_for_chunks)-1;$i++) {
                        $rel_name = $bought_for_chunks[$i];
                        $relation = $relationship_with_user_chunks[$i];
                        $qry = "INSERT INTO customer_purchases VALUES ('', '$user_email', '$product_bought', '$amount', now(), ".
                                "'$rel_name', '$relation', '0')";
                        $result_array[] = mysql_query($qry);
                }
        }

        if ($_POST['education_career_business'] != "") {
                $product_bought = $_POST['education_career_business'];
                $amount = $_POST['education_career_business_amount'];
                $bought_for = $_POST['education_career_business_bought_for'];
                $relationship_with_user = $_POST['education_career_business_hidden'];
                $bought_for_chunks = explode(" ",$bought_for);
                $relationship_with_user_chunks = explode(" ",$relationship_with_user);
                for ($i=0;$i<count($bought_for_chunks)-1;$i++) {
                        $rel_name = $bought_for_chunks[$i];
                        $relation = $relationship_with_user_chunks[$i];
                        $qry = "INSERT INTO customer_purchases VALUES ('', '$user_email', '$product_bought', '$amount', now(), ".
                                "'$rel_name', '$relation', '0')";
                        $result_array[] = mysql_query($qry);
                }
        }

        if ($_POST['health_fitness'] != "") {
                $product_bought = $_POST['health_fitness'];
                $amount = $_POST['health_fitness_amount'];
                $bought_for = $_POST['health_fitness_bought_for'];
                $relationship_with_user = $_POST['health_fitness_hidden'];
                $bought_for_chunks = explode(" ",$bought_for);
                $relationship_with_user_chunks = explode(" ",$relationship_with_user);
                for ($i=0;$i<count($bought_for_chunks)-1;$i++) {
                        $rel_name = $bought_for_chunks[$i];
                        $relation = $relationship_with_user_chunks[$i];
                        $qry = "INSERT INTO customer_purchases VALUES ('', '$user_email', '$product_bought', '$amount', now(), ".
                                "'$rel_name', '$relation', '0')";
                        $result_array[] = mysql_query($qry);
                }
        }

        if ($_POST['phone_consulting'] != "") {
                $product_bought = $_POST['phone_consulting'];
                $amount = $_POST['phone_consulting_amount'];
                $bought_for = $_POST['phone_consulting_bought_for'];
                $relationship_with_user = $_POST['phone_consulting_hidden'];
                $bought_for_chunks = explode(" ",$bought_for);
                $relationship_with_user_chunks = explode(" ",$relationship_with_user);
                for ($i=0;$i<count($bought_for_chunks)-1;$i++) {
                        $rel_name = $bought_for_chunks[$i];
                        $relation = $relationship_with_user_chunks[$i];
                        $qry = "INSERT INTO customer_purchases VALUES ('', '$user_email', '$product_bought', '$amount', now(), ".
                                "'$rel_name', '$relation', '0')";
                        $result_array[] = mysql_query($qry);
                }
        $_SESSION['phone_consulting_product'] = $product_bought; 
	$_SESSION['phone_consulting_amount'] = $amount;
        }	

        if ($_POST['annual_subscription'] != "") {
                $product_bought = $_POST['annual_subscription'];
                $amount = $_POST['annual_subscription_amount'];
                $bought_for = $_POST['annual_subscription_bought_for'];
                $relationship_with_user = $_POST['annual_subscription_hidden'];
                $bought_for_chunks = explode(" ",$bought_for);
                $relationship_with_user_chunks = explode(" ",$relationship_with_user);
                for ($i=0;$i<count($bought_for_chunks)-1;$i++) {
                        $rel_name = $bought_for_chunks[$i];
                        $relation = $relationship_with_user_chunks[$i];
                        $qry = "INSERT INTO customer_purchases VALUES ('', '$user_email', '$product_bought', '$amount', now(), ".
                                "'$rel_name', '$relation', '0')";
                        $result_array[] = mysql_query($qry);
                }
	$_SESSION['annual_subscription_product'] = $product_bought; 
	$_SESSION['annual_subscription_amount'] = $amount;
        }

        if ($_POST['family_consulting'] != "") {
                $product_bought = $_POST['family_consulting'];
                $amount = $_POST['family_consulting_amount'];
                $bought_for = $_POST['family_consulting_bought_for'];
                $relationship_with_user = $_POST['family_consulting_hidden'];
                $qry = "INSERT INTO customer_purchases VALUES ('', '$user_email', '$product_bought', '$amount', now(), ".
                                "'Family', 'family', '0')";
                $result_array[] = mysql_query($qry);
	$_SESSION['family_consulting_product'] = $product_bought;        
	$_SESSION['family_consulting_amount'] = $amount;        
	}

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
                                header("location: account_creation.php");
                                exit();
                        }
        } else {

                        session_regenerate_id();
                        $_SESSION['SESS_MEMBER_ID'] = $user_email;
                        session_write_close();
                        header("location: paypal.php");
                        exit();
        }

?>
