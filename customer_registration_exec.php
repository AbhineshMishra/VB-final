<?php
        //Start session
        session_start();
	require_once('connection.php');

	$user_name = $_POST['user_name'];
	$user_relationship = "self";
	$user_sex = $_POST['user_sex'];
	$user_dob_value = $_POST['user_dob'];

	$user_dob_chunks = explode("/",$user_dob_value);
	$user_dob = $user_dob_chunks[2]."-".$user_dob_chunks[0]."-".$user_dob_chunks[1];
	$user_hour = $_POST['user_hour'];
	$user_minute = $_POST['user_minute'];
	$user_second = $_POST['user_second'];
	$user_tob = $user_hour.":".$user_minute.":".$user_second;


	$user_pob = $_POST['user_pob'];
	$user_email = $_SESSION['SESS_MEMBER_ID'];
	$user_address = $_POST['user_address'];
	$user_liveswithyou = "y";
	$result_array = array();
	echo "I am fine till here";
	$qry = "INSERT INTO user_info (user_email, user_name, user_relationship, user_gender, user_dob, user_time, user_place, user_address, user_lives_with_you)". 
		"VALUES ('$user_email', '$user_name', '$user_relationship', '$user_sex', '$user_dob', '$user_tob', '$user_pob', '$user_address', '$user_liveswithyou')";	
	$result_array[]=mysql_query($qry);

        if ($_POST['spouse_name'] != "" || $_POST['spouse_email'] != "") {
		
		$spouse_email = $_POST['spouse_email'];
		$spouse_name = $_POST['spouse_name'];
		$spouse_sex = $_POST['spouse_sex'];
		$spouse_dob_value = $_POST['spouse_dob'];
        	$spouse_dob_chunks = explode("/",$spouse_dob_value);
        	$spouse_dob = $spouse_dob_chunks[2]."-".$spouse_dob_chunks[0]."-".$spouse_dob_chunks[1];
		$spouse_tob = $_POST['spouse_hour'].":".$_POST['spouse_minute'].":".$_POST['spouse_second'];
		$spouse_pob = $_POST['spouse_pob'];
        	$spouse_address = $_POST['spouse_address'];
        	$spouse_liveswithyou = $_POST['spouse_liveswithyou'];	
		$qry = "INSERT INTO relative_info VALUES ('','$user_email', 'spouse', '$spouse_email', '$spouse_name', '$spouse_sex', ".
			"'$spouse_dob', '$spouse_tob', '$spouse_pob','$spouse_address', '$spouse_liveswithyou')";
		$result_array[]=mysql_query($qry);
        }

        if ($_POST['child1_name'] != "" || $_POST['child1_email'] != "") {

                $child1_email = $_POST['child1_email'];
                $child1_name = $_POST['child1_name'];
                $child1_sex = $_POST['child1_sex'];
                $child1_dob_value = $_POST['child1_dob'];
                $child1_dob_chunks = explode("/",$child1_dob_value);
                $child1_dob = $child1_dob_chunks[2]."-".$child1_dob_chunks[0]."-".$child1_dob_chunks[1];
                $child1_tob = $_POST['child1_hour'].":".$_POST['child1_minute'].":".$_POST['child1_second'];
                $child1_pob = $_POST['child1_pob'];
                $child1_address = $_POST['child1_address'];
                $child1_liveswithyou = $_POST['child1_liveswithyou'];
                $qry = "INSERT INTO relative_info VALUES ('','$user_email', 'child', '$child1_email', '$child1_name', '$child1_sex', ".
                        "'$child1_dob', '$child1_tob', '$child1_pob','$child1_address', '$child1_liveswithyou')";
                $result_array[]=mysql_query($qry);
        }

        if ($_POST['child2_name'] != "" || $_POST['child2_email'] != "") {

                $child2_email = $_POST['child2_email'];
                $child2_name = $_POST['child2_name'];
                $child2_sex = $_POST['child2_sex'];
                $child2_dob_value = $_POST['child2_dob'];
                $child2_dob_chunks = explode("/",$child2_dob_value);
                $child2_dob = $child2_dob_chunks[2]."-".$child2_dob_chunks[0]."-".$child2_dob_chunks[1];
                $child2_tob = $_POST['child2_hour'].":".$_POST['child2_minute'].":".$_POST['child2_second'];
                $child2_pob = $_POST['child2_pob'];
                $child2_address = $_POST['child2_address'];
                $child2_liveswithyou = $_POST['child2_liveswithyou'];
                $qry = "INSERT INTO relative_info VALUES ('','$user_email', 'child', '$child2_email', '$child2_name', '$child2_sex', ".
                        "'$child2_dob', '$child2_tob', '$child2_pob','$child2_address', '$child2_liveswithyou')";
                $result_array[]=mysql_query($qry);
        }

        if ($_POST['mother_name'] != "" || $_POST['mother_email'] != "") {

                $mother_email = $_POST['mother_email'];
                $mother_name = $_POST['mother_name'];
                $mother_sex = $_POST['mother_sex'];
                $mother_dob_value = $_POST['mother_dob'];
                $mother_dob_chunks = explode("/",$mother_dob_value);
                $mother_dob = $mother_dob_chunks[2]."-".$mother_dob_chunks[0]."-".$mother_dob_chunks[1];
                $mother_tob = $_POST['mother_hour'].":".$_POST['mother_minute'].":".$_POST['mother_second'];
                $mother_pob = $_POST['mother_pob'];
                $mother_address = $_POST['mother_address'];
                $mother_liveswithyou = $_POST['mother_liveswithyou'];
                $qry = "INSERT INTO relative_info VALUES ('','$user_email', 'mother', '$mother_email', '$mother_name', '$mother_sex', ".
                        "'$mother_dob', '$mother_tob', '$mother_pob','$mother_address', '$mother_liveswithyou')";
                $result_array[]=mysql_query($qry);
        }

        if ($_POST['father_name'] != "" || $_POST['father_email'] != "") {

                $father_email = $_POST['father_email'];
                $father_name = $_POST['father_name'];
                $father_sex = $_POST['father_sex'];
                $father_dob_value = $_POST['father_dob'];
                $father_dob_chunks = explode("/",$father_dob_value);
                $father_dob = $father_dob_chunks[2]."-".$father_dob_chunks[0]."-".$father_dob_chunks[1];
                $father_tob = $_POST['father_hour'].":".$_POST['father_minute'].":".$_POST['father_second'];
                $father_pob = $_POST['father_pob'];
                $father_address = $_POST['father_address'];
                $father_liveswithyou = $_POST['father_liveswithyou'];
                $qry = "INSERT INTO relative_info VALUES ('','$user_email', 'father', '$father_email', '$father_name', '$father_sex', ".
                        "'$father_dob', '$father_tob', '$father_pob','$father_address', '$father_liveswithyou')";
                $result_array[]=mysql_query($qry);
        }

        if ($_POST['anyother1_name'] != "" || $_POST['anyother1_email'] != "") {

                $anyother1_email = $_POST['anyother1_email'];
                $anyother1_name = $_POST['anyother1_name'];
		$anyother1_relationship = $_POST['anyother1_relationship'];
                $anyother1_sex = $_POST['anyother1_sex'];
                $anyother1_dob_value = $_POST['anyother1_dob'];
                $anyother1_dob_chunks = explode("/",$anyother1_dob_value);
                $anyother1_dob = $anyother1_dob_chunks[2]."-".$anyother1_dob_chunks[0]."-".$anyother1_dob_chunks[1];
                $anyother1_tob = $_POST['anyother1_hour'].":".$_POST['anyother1_minute'].":".$_POST['anyother1_second'];
                $anyother1_pob = $_POST['anyother1_pob'];
                $anyother1_address = $_POST['anyother1_address'];
                $anyother1_liveswithyou = $_POST['anyother1_liveswithyou'];
                $qry = "INSERT INTO relative_info VALUES ('','$user_email', '$anyother1_relationship', '$anyother1_email', '$anyother1_name', '$anyother1_sex', ".
                        "'$anyother1_dob', '$anyother1_tob', '$anyother1_pob','$anyother1_address', '$anyother1_liveswithyou')";
                $result_array[]=mysql_query($qry);
        }

        if ($_POST['anyother2_name'] != "" || $_POST['anyother2_email'] != "") {

                $anyother2_email = $_POST['anyother2_email'];
                $anyother2_name = $_POST['anyother2_name'];
                $anyother2_relationship = $_POST['anyother2_relationship'];
                $anyother2_sex = $_POST['anyother2_sex'];
                $anyother2_dob_value = $_POST['anyother2_dob'];
                $anyother2_dob_chunks = explode("/",$anyother2_dob_value);
                $anyother2_dob = $anyother2_dob_chunks[2]."-".$anyother2_dob_chunks[0]."-".$anyother2_dob_chunks[1];
                $anyother2_tob = $_POST['anyother2_hour'].":".$_POST['anyother2_minute'].":".$_POST['anyother2_second'];
                $anyother2_pob = $_POST['anyother2_pob'];
                $anyother2_address = $_POST['anyother2_address'];
                $anyother2_liveswithyou = $_POST['anyother2_liveswithyou'];
                $qry = "INSERT INTO relative_info VALUES ('','$user_email', '$anyother2_relationship', '$anyother2_email', '$anyother2_name', '$anyother2_sex', ".
                        "'$anyother2_dob', '$anyother2_tob', '$anyother2_pob','$anyother2_address', '$anyother2_liveswithyou')";
                $result_array[]=mysql_query($qry);
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
			header("location: products.php");
                        exit();
	}
?>
