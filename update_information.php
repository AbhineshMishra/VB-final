<?php
        require_once('auth.php');
?>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/jquery.datepick.css" rel="stylesheet">
<link href="css/customer_registration.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/jquery.datepick.js"></script>
<script src="js/validateForm.js"></script>

<script>
$(function() {
        $('#popupDatepicker_user').datepick();
        $('#popupDatepicker_spouse').datepick();
        $('#popupDatepicker_child1').datepick();
        $('#popupDatepicker_child2').datepick();
        $('#popupDatepicker_mother').datepick();
        $('#popupDatepicker_father').datepick();
        $('#popupDatepicker_anyother1').datepick();
        $('#popupDatepicker_anyother2').datepick();
});

</script>
</head>

<?php
        //Start session
        session_start();
	require_once('connection.php');
        function clean($str) {
                $str = @trim($str);
                if(get_magic_quotes_gpc()) {
                        $str = stripslashes($str);
                }
                return mysql_real_escape_string($str);
        }

?>

<body bgcolor="red">
<table border="0" style="width:75%;margin-top:25px;margin-left:200px">
<tr>
<td><u><font color="darkblue">
Hello </font><font color="cyan"><?php   $user_first_name = explode("@",$_SESSION['SESS_MEMBER_ID']);
                                      echo $user_first_name[0]." !!! "; ?> </font>
</u></td>
<td align="left">
<img border="0" hspace="100" alt="aruba.jpg" hspace="90" src="VB.jpg" width="200" height="40" >
</td>
</tr>
</table>
<hr style="width:100%;margin-top:0px">
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
<p><div align="center" style="margin-top:30px">
<font color="#242A56">
<h2>-: <u>Update Information</u> :-</h2></p>
</div>
<form  id="update_info" name ="update_info" method="post" action="update_information_exec.php" onsubmit="return validateForm();">
<table border="2" style="width:100%;margin-top:25px">
<tr>
<th id="name">Name</th>
<th id="relationship">Relationship</th>
<th id="sex">Sex</th>
<th id="dob">Date of Birth</th>
<th id="time">Time (24 hours format)</th>
<th id="pob">Place of Birth</th>
<th id="email-id">Email-Address</th>
<th id="address">Current Address</th>
<th id="liveswithyou">Lives with You?</th>
</tr>
<tr>
<td>
<input type="text" name="user_name" id="user_name" class="user" style="width:100%" placeholder="Your Name (*mandatory)">
</td>
<td>
<select name="user_relationship" disabled>
        <option value="self" selected="selected">Self</option>
        <option value="spouse">Spouse</option>
        <option value="child">Child</option>
        <option value="mother">Mother</option>
        <option value="father">Father</option>
        <option value="sister">Sister</option>
        <option value="brother">Brother</option>
        <option value="mother-in-law">Mother-in-law</option>
        <option value="father-in-law">Father-in-law</option>
        <option value="anyother">Any Other</option>
</select>
</td>
<td>
<select name="user_sex">
        <option value="M">Male</option>
        <option value="F">Female</option>
</select>
</td>
<td>
<input type="text" id="popupDatepicker_user" name="user_dob"  class="user" placeholder="Your DoB (*mandatory)">
</td>
<td>
<select name="user_hour">
        <option value="0">Hr</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
</select>
<select name="user_minute">
        <option value="0">Min</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
<select name="user_second">
        <option value="0">Sec</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
</td>
<td>
<input type="text" name="user_pob" id="user_pob" class="user" style="width:100%" placeholder="Birth Place (*mandatory)">
</td>
<?php
/*	
        $qry="SELECT * FROM users WHERE user_email='$_SESSION['SESS_MEMBER_ID']'";
        $result=mysql_query($qry);
        if($result) {
                if(mysql_num_rows($result) > 0) {
			$member = mysql_fetch_assoc($result);
		} else {
                        $errmsg_arr[] = 'account not created';
                        $errflag = true;
                        if($errflag) {
                                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                                session_write_close();
                                header("location: account_creation.php");
                                exit();
                        }
                }
        } else {
                die("Query failed");
        }
*/
?>
<td>
<input type="text" name="user_email" id="user_email" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>" style="width:100%" disabled>
</td>
<td>
<input type="text" name="user_address" id="user_address" class="user" style="width:100%" placeholder="Address (*mandatory)">
</td>
<td>
<select name="user_liveswithyou" disabled>
        <option value="y" selected="selected">Yes</option>
        <option value="n">No</option>
</select>
</td>
</tr>
<tr>
<td>
<input type="text" name="spouse_name" id="spouse_name" style="width:100%" placeholder="Spouse's name">
</td>
<td>
<select name="spouse_relationship">
        <option value="self">Self</option>
        <option value="spouse" selected="selected">Spouse</option>
        <option value="child">Child</option>
        <option value="mother">Mother</option>
        <option value="father">Father</option>
        <option value="sister">Sister</option>
        <option value="brother">Brother</option>
        <option value="mother-in-law">Mother-in-law</option>
        <option value="father-in-law">Father-in-law</option>
        <option value="anyother">Any Other</option>
</select>
</td>
<td>
<select name="spouse_sex">
        <option value="M">Male</option>
        <option value="F">Female</option>
</select>
</td>
<td>
<input type="text" id="popupDatepicker_spouse" name="spouse_dob">
</td>
<td>
<select name="spouse_hour">
        <option value="0">Hr</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
</select>
<select name="spouse_minute">
        <option value="0">Min</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
<select name="spouse_second">
        <option value="0">Sec</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
</td>
<td>
<input type="text" name="spouse_pob" id="spouse_pob" style="width:100%" placeholder="Birth Place">
</td>
<td>
<input type="text" name="spouse_email" id="spouse_email" style="width:100%" placeholder="Email Address">
</td>
<td>
<input type="text" name="spouse_address" id="spouse_address" style="width:100%" placeholder="Address">
</td>
<td>
<select name="spouse_liveswithyou">
        <option value="yes">Yes</option>
        <option value="no">No</option>
</select>
</td>
</tr>
<tr>
<td>
<input type="text" name="child1_name" id="child1_name" style="width:100%" placeholder="Child's Name">
</td>
<td>
<select name="child1_relationship">
        <option value="self">Self</option>
        <option value="spouse">Spouse</option>
        <option value="child" selected="selected">Child</option>
        <option value="mother">Mother</option>
        <option value="father">Father</option>
        <option value="sister">Sister</option>
        <option value="brother">Brother</option>
        <option value="mother-in-law">Mother-in-law</option>
        <option value="father-in-law">Father-in-law</option>
        <option value="anyother">Any Other</option>
</select>
</td>
<td>
<select name="child1_sex">
        <option value="M">Male</option>
        <option value="F">Female</option>
</select>
</td>
<td>
<input type="text" id="popupDatepicker_child1" name="child1_dob">
</td>
<td>
<select name="child1_hour">
        <option value="0">Hr</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
</select>
<select name="child1_minute">
        <option value="0">Min</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
<select name="child1_second">
        <option value="0">Sec</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
</td>
<td>
<input type="text" name="child1_pob" id="child1_pob" style="width:100%" placeholder="Birth Place">
</td>
<td>
<input type="text" name="child1_email" id="child1_email" style="width:100%" placeholder="Email Address">
</td>
<td>
<input type="text" name="child1_address" id="child1_address" style="width:100%" placeholder="Address">
</td>
<td>
<select name="child1_liveswithyou">
        <option value="yes">Yes</option>
        <option value="no">No</option>
</select>
</td>
</tr>
<tr>
<td>
<input type="text" name="child2_name" id="child2_name" style="width:100%" placeholder="Child's Name">
</td>
<td>
<select name="child2_relationship">
        <option value="self">Self</option>
        <option value="spouse">Spouse</option>
        <option value="child" selected="selected">Child</option>
        <option value="mother">Mother</option>
        <option value="father">Father</option>
        <option value="sister">Sister</option>
        <option value="brother">Brother</option>
        <option value="mother-in-law">Mother-in-law</option>
        <option value="father-in-law">Father-in-law</option>
        <option value="anyother">Any Other</option>
</select>
</td>
<td>
<select name="child2_sex">
        <option value="M">Male</option>
        <option value="F">Female</option>
</select>
</td>
<td>
<input type="text" id="popupDatepicker_child2" name="child2_dob">
</td>
<td>
<select name="child2_hour">
        <option value="0">Hr</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
</select>
<select name="child2_minute">
        <option value="0">Min</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
<select name="child2_second">
        <option value="0">Sec</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
</td>
<td>
<input type="text" name="child2_pob" id="child2_pob" style="width:100%" placeholder="Birth Place">
</td>
<td>
<input type="text" name="child2_email" id="child2_email" style="width:100%" placeholder="Email Address">
</td>
<td>
<input type="text" name="child2_address" id="child2_address" style="width:100%" placeholder="Address">
</td>
<td>
<select name="child2_liveswithyou">
        <option value="yes">Yes</option>
        <option value="no">No</option>
</select>
</td>
</tr>
<tr>
<td>
<input type="text" name="mother_name" id="mother_name" style="width:100%" placeholder="Mother's Name">
</td>
<td>
<select name="mother_relationship">
        <option value="self">Self</option>
        <option value="spouse">Spouse</option>
        <option value="child">Child</option>
        <option value="mother" selected="selected">Mother</option>
        <option value="father">Father</option>
        <option value="sister">Sister</option>
        <option value="brother">Brother</option>
        <option value="mother-in-law">Mother-in-law</option>
        <option value="father-in-law">Father-in-law</option>
        <option value="anyother">Any Other</option>
</select>
</td>
<td>
<select name="mother_sex">
        <option value="M">Male</option>
        <option value="F" selected="selected">Female</option>
</select>
</td>
<td>
<input type="text" id="popupDatepicker_mother" name="mother_dob">
</td>
<td>
<select name="mother_hour">
        <option value="0">Hr</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
</select>
<select name="mother_minute">
        <option value="0">Min</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
<select name="mother_second">
        <option value="0">Sec</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
</td>
<td>
<input type="text" name="mother_pob" id="mother_pob" style="width:100%" placeholder="Birth Place">
</td>
<td>
<input type="text" name="mother_email" id="mother_email" style="width:100%" placeholder="Email Address">
</td>
<td>
<input type="text" name="mother_address" id="mother_address" style="width:100%" placeholder="Address">
</td>
<td>
<select name="mother_liveswithyou">
        <option value="yes">Yes</option>
        <option value="no">No</option>
</select>
</td>
</tr>
<tr>
<td>
<input type="text" name="father_name" id="father_name" style="width:100%" placeholder="Father's Name">
</td>
<td>
<select name="father_relationship">
        <option value="self">Self</option>
        <option value="spouse">Spouse</option>
        <option value="child">Child</option>
        <option value="mother">Mother</option>
        <option value="father" selected="selected">Father</option>
        <option value="sister">Sister</option>
        <option value="brother">Brother</option>
        <option value="mother-in-law">Mother-in-law</option>
        <option value="father-in-law">Father-in-law</option>
        <option value="anyother">Any Other</option>
</select>
</td>
<td>
<select name="father_sex">
        <option value="M">Male</option>
        <option value="F">Female</option>
</select>
</td>
<td>
<input type="text" id="popupDatepicker_father" name="father_dob">
</td>
<td>
<select name="father_hour">
        <option value="0">Hr</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
</select>
<select name="father_minute">
        <option value="0">Min</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
<select name="father_second">
        <option value="0">Sec</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
</td>
<td>
<input type="text" name="father_pob" id="father_pob" style="width:100%" placeholder="Birth Place">
</td>
<td>
<input type="text" name="father_email" id="father_email" style="width:100%" placeholder="Email Address">
</td>
<td>
<input type="text" name="father_address" id="father_address" style="width:100%" placeholder="Address">
</td>
<td>
<select name="father_liveswithyou">
        <option value="yes">Yes</option>
        <option value="no">No</option>
</select>
</td>
</tr>
<tr>
<td>
<input type="text" name="anyother1_name" id="anyother1_name" style="width:100%" placeholder="Anyother Person">
</td>
<td>
<select name="anyother1_relationship">
        <option value="self">Self</option>
        <option value="spouse">Spouse</option>
        <option value="child">Child</option>
        <option value="mother">Mother</option>
        <option value="father">Father</option>
        <option value="sister">Sister</option>
        <option value="brother">Brother</option>
        <option value="mother-in-law">Mother-in-law</option>
        <option value="father-in-law">Father-in-law</option>
        <option value="anyother" selected="selected">Any Other</option>
</select>
</td>
<td>
<select name="anyother1_sex">
        <option value="M">Male</option>
        <option value="F">Female</option>
</select>
</td>
<td>
<input type="text" id="popupDatepicker_anyother1" name="anyother1_dob">
</td>
<td>
<select name="anyother1_hour">
        <option value="0">Hr</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
</select>
<select name="anyother1_minute">
        <option value="0">Min</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
<select name="anyother1_second">
        <option value="0">Sec</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
</td>
<td>
<input type="text" name="anyother1_pob" id="anyother1_pob" style="width:100%" placeholder="Birth Place">
</td>
<td>
<input type="text" name="anyother1_email" id="anyother1_email" style="width:100%" placeholder="Email Address">
</td>
<td>
<input type="text" name="anyother1_address" id="anyother1_address" style="width:100%" placeholder="Address">
</td>
<td>
<select name="anyother1_liveswithyou">
        <option value="yes">Yes</option>
        <option value="no">No</option>
</select>
</td>
</tr>
<tr>
<td>
<input type="text" name="anyother2_name" id="anyother2_name" style="width:100%" placeholder="Anyother Person">
</td>
<td>
<select name="anyother2_relationship">
        <option value="self">Self</option>
        <option value="spouse">Spouse</option>
        <option value="child">Child</option>
        <option value="mother">Mother</option>
        <option value="father">Father</option>
        <option value="sister">Sister</option>
        <option value="brother">Brother</option>
        <option value="mother-in-law">Mother-in-law</option>
        <option value="father-in-law">Father-in-law</option>
        <option value="anyother" selected="selected">Any Other</option>
</select>
</td>
<td>
<select name="anyother2_sex">
        <option value="M">Male</option>
        <option value="F">Female</option>
</select>
</td>
<td>
<input type="text" id="popupDatepicker_anyother2" name="anyother2_dob">
</td>
<td>
<select name="anyother2_hour">
        <option value="0">Hr</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
</select>
<select name="anyother2_minute">
        <option value="0">Min</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
<select name="anyother2_second">
        <option value="0">Sec</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
        <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option>
        <option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option>
        <option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option>
        <option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option>
        <option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option>
        <option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
        <option value="58">58</option><option value="59">59</option>
</select>
</td>
<td>
<input type="text" name="anyother2_pob" id="anyother2_pob" style="width:100%" placeholder="Birth Place">
</td>
<td>
<input type="text" name="anyother2_email" id="anyother2_email" style="width:100%" placeholder="Email Address">
</td>
<td>
<input type="text" name="anyother2_address" id="anyother2_address" style="width:100%" placeholder="Address">
</td>
<td>
<select name="anyother2_liveswithyou">
        <option value="yes">Yes</option>
        <option value="no">No</option>
</select>
</td>
</tr>

</table>
<table style="width:100%;margin-top:20px">
<tr>
<td align="center">
<input type="submit" value="Update">
</td>
</tr>
</table>
</form>
</body>
