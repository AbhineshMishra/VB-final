<?php
        require_once('auth.php');
?>
<head>

</head>
<script>
     sessionStorage.setItem("Page2Visited", "True");
</script>
<?php
        //Start session
        session_start();
        require_once('connection.php');
?>
<body bgcolor="red">
<?php require_once('menu.php'); ?>
<p><div align="center" style="margin-top:30px">
<font color="#242A56">
<h2>-: <u>Your Order Summary</u> :-</h2></p>
</div
<hr style="width:75%;margin-top:10px;margin-left:200px">
<form id="order_preview" name="order_preview" method="post" action="order_preview_exec.php">
<table border="2" style="width:75%;margin-top:25px;margin-left:200px">
<tr>
<th id="product_name">Product Name</th>
<th id="product_buying_for">Buying For</th>
<th id="product_price">Price</th>
<th id="product_amount">Amount</th>
</tr>
<tr>
<?php 
$product_array = array();
$bought_for_array = array();
$bought_for_relative_array = "";
$cost_array = array();
if ($_POST['basic_astro_hidden'] != "") {
?>
	<td align="left">
	<input type="text" name="basic_astro" id="basic_astro" readonly="readonly" 
	value="Basic Astro Consulting with 3 Questions" style="width:100%">
	</td>

	<td align="left">
	<input type="text" name="basic_astro_bought_for" id="basic_astro_bought_for" readonly="readonly"
	value="<?php
	$astro_value = $_POST['basic_astro_hidden'];
	$astro_value_chunks = explode("@", $astro_value);
	for($i=1;$i<count($astro_value_chunks);$i++) {
                $astro_value_relatives = explode(" ",$astro_value_chunks[$i]);
                $relatives_name = explode("&",$astro_value_relatives[1]);
                echo $relatives_name[0]." ";
//                $bought_for_array[] = $astro_value_relatives[0]." ";
		$bought_for_relative_array = $bought_for_relative_array.$relatives_name[1]." ";
	}		
?>" style="width:100%">
	</td>

	<td align="left">
	<input type="text" name="basic_astro_price" id="basic_astro_price" readonly="readonly"
	value="$11.00" style="width:100%">
	</td>

	<td align="left">
	<input type="text" name="basic_astro_amount" id="basic_astro_amount" readonly="readonly"
        value="$<?php echo (($i-1) * 11); ?>" style="width:100%">
	</td>
<input type="hidden" id="basic_astro_hidden" name="basic_astro_hidden" value="<?php
echo $bought_for_relative_array; ?>">
<?php
}
?>
</tr>
<tr>
<?php
if ($_POST['detailed_astro_hidden'] != "") {
	$bought_for_relative_array = "";
?>
        <td align="left">
	<input type="text" name="detailed_astro" id="detailed_astro" readonly="readonly" 
	value="Detailed Astro Consulting with 5 Questions" style="width:100%">        
        </td>

        <td align="left">
	<input type="text" name="detailed_astro_bought_for" id="detailed_astro_bought_for" readonly="readonly"
	value="<?php
	$product_array[]="Detailed Astro Consulting with 5 Questions"."-";
        $astro_value = $_POST['detailed_astro_hidden'];
        $astro_value_chunks = explode("@", $astro_value);
        for($i=1;$i<count($astro_value_chunks);$i++) {
                $astro_value_relatives = explode(" ",$astro_value_chunks[$i]);
                $relatives_name = explode("&",$astro_value_relatives[1]);
                echo $relatives_name[0]." ";
//                $bought_for_array[] = $astro_value_relatives[0]." ";
                $bought_for_relative_array =$bought_for_relative_array.$relatives_name[1]." ";
	}
?>" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="detailed_astro_price" id="detailed_astro_price" readonly="readonly"
	value="$31.00" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="detailed_astro_amount" id="detailed_astro_amount" readonly="readonly"
        value="$<?php echo (($i-1) * 31); ?>" style="width:100%">
        </td>

<input type="hidden" id="detailed_astro_hidden" name="detailed_astro_hidden" value="<?php
echo $bought_for_relative_array; ?>">
<?php
}
?>
</tr>

<tr>
<?php
if ($_POST['love_marriage_hidden'] != "") {
	$bought_for_relative_array = "";
?>
        <td align="left">
	<input type="text" name="love_marriage" id="love_marriage" readonly="readonly"
	value="Love & Marriage Consulting" style="width:100%">        
        </td>

        <td align="left">
	<input type="text" name="love_marriage_bought_for" id="love_marriage_bought_for" readonly="readonly"
	value="<?php
        $astro_value = $_POST['love_marriage_hidden'];
	$astro_value_chunks = explode("@", $astro_value);
        for($i=1;$i<count($astro_value_chunks);$i++) {
                $astro_value_relatives = explode(" ",$astro_value_chunks[$i]);
                $relatives_name = explode("&",$astro_value_relatives[1]);
                echo $relatives_name[0]." ";
       //         $bought_for_array[] = $astro_value_relatives[0]." ";
                $bought_for_relative_array =$bought_for_relative_array.$relatives_name[1]." ";
        }
?>" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="love_marriage_price" id="love_marriage_price" readonly="readonly"
	value="$21.00" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="love_marriage_amount" id="love_marriage_amount" readonly="readonly"
        value="$<?php echo (($i-1) * 21); ?>" style="width:100%">
        </td>

<input type="hidden" id="love_marriage_hidden" name="love_marriage_hidden" value="<?php
echo $bought_for_relative_array; ?>">

<?php
}
?>
</tr>

<tr>
<?php
if ($_POST['child_consulting_hidden'] != "") {
	$bought_for_relative_array = "";
?>
        <td align="left">
	<input type="text" name="child_consulting" id="child_consulting" readonly="readonly"
	value="Child Consulting" style="width:100%">        
        </td>

        <td align="left">
	<input type="text" name="child_consulting_bought_for" id="child_consulting_bought_for" readonly="readonly"
	value="<?php
        $astro_value = $_POST['child_consulting_hidden'];
        $astro_value_chunks = explode("@", $astro_value);
        for($i=1;$i<count($astro_value_chunks);$i++) {
                $astro_value_relatives = explode(" ",$astro_value_chunks[$i]);
                $relatives_name = explode("&",$astro_value_relatives[1]);
                echo $relatives_name[0]." ";
//                $bought_for_array[] = $astro_value_relatives[0]." ";
                $bought_for_relative_array =$bought_for_relative_array.$relatives_name[1]." ";
        }
	?>" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="child_consulting_price" id="child_consulting_price" readonly="readonly"
        value="$21.00" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="child_consulting_amount" id="child_consulting_amount" readonly="readonly"
        value="$<?php echo (($i-1) * 21); ?>" style="width:100%">
        </td>

<input type="hidden" id="child_consulting_hidden" name="child_consulting_hidden" value="<?php
echo $bought_for_relative_array; ?>">

<?php
}
?>
</tr>

<tr>
<?php
if ($_POST['education_career_business_hidden'] != "") {
	$bought_for_relative_array = "";
?>
        <td align="left">
	<input type="text" name="education_career_business" id="education_career_business" readonly="readonly" 
	value="Education, Carrear and Business Consulting" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="education_career_business_bought_for" id="education_career_business_bought_for"
 	readonly="readonly" value="<?php
        $astro_value = $_POST['education_career_business_hidden'];
        $astro_value_chunks = explode("@", $astro_value);
        for($i=1;$i<count($astro_value_chunks);$i++) {
                $astro_value_relatives = explode(" ",$astro_value_chunks[$i]);
                $relatives_name = explode("&",$astro_value_relatives[1]);
                echo $relatives_name[0]." ";
//                $bought_for_array[] = $astro_value_relatives[0]." ";
                $bought_for_relative_array =$bought_for_relative_array.$relatives_name[1]." ";
        }
	?>" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="education_career_business_price" id="education_career_business_price" readonly="readonly"
        value="$21.00" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="education_career_business_amount" id="education_career_business_amount" readonly="readonly"
        value="$<?php echo (($i-1) * 21); ?>" style="width:100%">
        </td>

<input type="hidden" id="education_career_business_hidden" name="education_career_business_hidden" value="<?php
echo $bought_for_relative_array; ?>">

<?php
}
?>
</tr>

<tr>
<?php
if ($_POST['health_fitness_hidden'] != "") {
	$bought_for_relative_array = "";
?>
        <td align="left">
	<input type="text" name="health_fitness" id="health_fitness" readonly="readonly"
	value="Health and Fitness Consulting" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="health_fitness_bought_for" id="health_fitness_bought_for" readonly="readonly"
	value="<?php
        $astro_value = $_POST['health_fitness_hidden'];
        $astro_value_chunks = explode("@", $astro_value);
        for($i=1;$i<count($astro_value_chunks);$i++) {
                $astro_value_relatives = explode(" ",$astro_value_chunks[$i]);
                $relatives_name = explode("&",$astro_value_relatives[1]);
                echo $relatives_name[0]." ";
//                $bought_for_array[] = $astro_value_relatives[0]." ";
                $bought_for_relative_array = $bought_for_relative_array.$relatives_name[1]." ";
        }
	?>" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="health_fitness_price" id="health_fitness_price" readonly="readonly"
        value="$21.00" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="health_fitness_amount" id="health_fitness_amount" readonly="readonly"
        value="$<?php echo (($i-1) * 21); ?>" style="width:100%">
        </td>

<input type="hidden" id="health_fitness_hidden" name="health_fitness_hidden" value="<?php
echo $bought_for_relative_array; ?>">

<?php
}
?>
</tr>

<tr>
<?php
if ($_POST['phone_consulting_hidden'] != "") {
	$bought_for_relative_array = "";
?>
        <td align="left">
	<input type="text" name="phone_consulting" id="phone_consulting" readonly="readonly"
	value="30 Min Phone Consulting(with Basic Astro)" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="phone_consulting_bought_for" id="phone_consulting_bought_for" readonly="readonly"
	value="<?php
        $astro_value = $_POST['phone_consulting_hidden'];
        $astro_value_chunks = explode("@", $astro_value);
        for($i=1;$i<count($astro_value_chunks);$i++) {
                $astro_value_relatives = explode(" ",$astro_value_chunks[$i]);
                $relatives_name = explode("&",$astro_value_relatives[1]);
                echo $relatives_name[0]." ";
//                $bought_for_array[] = $astro_value_relatives[0]." ";
		$bought_for_relative_array = $bought_for_relative_array.$relatives_name[1]." ";
        }
	?>" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="phone_consulting_price" id="phone_consulting_price" readonly="readonly"
        value="$21.00" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="phone_consulting_amount" id="phone_consulting_amount" readonly="readonly"
        value="$<?php echo (($i-1) * 21); ?>" style="width:100%">
        </td>

<input type="hidden" id="phone_consulting_hidden" name="phone_consulting_hidden" value="<?php
echo $bought_for_relative_array; ?>">

<?php
}
?>
</tr>

<tr>
<?php
if ($_POST['annual_subscription_hidden'] != "") {
	$bought_for_relative_array = "";
?>
        <td align="left">
	<input type="text" name="annual_subscription" id="annual_subscription" readonly="readonly"
	value="Annual subscription (time to time)" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="annual_subscription_bought_for" id="annual_subscription_bought_for" readonly="readonly"
	value="<?php
        $astro_value = $_POST['annual_subscription_hidden'];
        $astro_value_chunks = explode("@", $astro_value);
        for($i=1;$i<count($astro_value_chunks);$i++) {
                $astro_value_relatives = explode(" ",$astro_value_chunks[$i]);
                $relatives_name = explode("&",$astro_value_relatives[1]);
                echo $relatives_name[0]." ";
//                $bought_for_array[] = $astro_value_relatives[0]." ";
		$bought_for_relative_array = $bought_for_relative_array.$relatives_name[1]." ";
        }
	?>" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="annual_subscription_price" id="annual_subscription_price" readonly="readonly"
        value="$51.00" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="annual_subscription_amount" id="annual_subscription_amount" readonly="readonly"
        value="$<?php echo (($i-1) * 51); ?>" style="width:100%">
        </td>

<input type="hidden" id="annual_subscription_hidden" name="annual_subscription_hidden" value="<?php
echo $bought_for_relative_array; ?>">

<?php
}
?>
</tr>

<tr>
<?php
if ($_POST['family_consulting_hidden'] != "") {
	$bought_for_relative_array = "";
?>
        <td align="left">
	<input type="text" name="family_consulting" id="family_consulting" readonly="readonly"
	value="Family Consulting" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="family_consulting_bought_for" id="family_consulting_bought_for" readonly="readonly"
	value="family" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="family_consulting_price" id="family_consulting_price" readonly="readonly"
        value="$101.00" style="width:100%">
        </td>

        <td align="left">
	<input type="text" name="family_consulting_amount" id="family_consulting_amount" readonly="readonly"
        value="$<?php echo (($i-1) * 101); ?>" style="width:100%">
        </td>

<input type="hidden" id="family_consulting_hidden" name="family_consulting_hidden" value="family">

<?php
}
?>
</tr>
</table>
<hr style="width:75%;margin-top:25px;margin-left:200px">
<table border="0" style="width:75%;margin-top:25px;margin-left:200px">
<tr>
<td align="right" style="width:75%">
Fee:
</td>
<td align="right">
$<?php echo $_POST['fee']; ?>
</td>
</tr>
<tr>
<td align="right" style="width:75%">
Total Amount:
</td>
<td align="right">
$<?php echo $_POST['amount']; ?>
</td>
</tr>
</table>
<table border="0" style="width:70%;margin-top:20px;margin-left:300px">
<tr>
<td align="right">
<a href="products.php"><button type="button">Click Here to Go Back</button></a>

<input type="submit" name="continue" value=" Place the Order ">
</td>
</tr>
</table>
</form>
</body>
