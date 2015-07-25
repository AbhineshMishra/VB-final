<?php
        require_once('auth.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/multiselect-1/jquery-ui-1.8.13.custom.css">
    <link rel="stylesheet" type="text/css" href="css/multiselect-1/ui.dropdownchecklist.themeroller.css">
    <!--  <link rel="stylesheet" type="text/css" href="css/multiselect-1/ui.dropdownchecklist.standalone.css">  -->
    <style>
table td { vertical-align: top }
dd { padding-bottom: 15px }
    </style>

    <!-- Include the basic JQuery support (core and ui) -->
    <script type="text/javascript" src="js/multiselect-1/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="js/multiselect-1/jquery-ui-1.8.13.custom.min.js"></script>

    <!-- Include the DropDownCheckList supoprt -->
    <!-- <script type="text/javascript" src="js/multiselect-1/ui.dropdownchecklist.js"></script> -->
    <script type="text/javascript" src="js/multiselect-1/ui.dropdownchecklist-1.4-min.js"></script>

    <!-- Apply dropdown check list to the selected items  -->
    <script type="text/javascript">
        $(document).ready(function() {

        $("#basic_astro_list").dropdownchecklist( { emptyText: "Please select ...", width: 150, forceMultiple: true
, onComplete: function(selector) {
        var values = "";
	var basic_astro_value = "";
        for( i=0; i < selector.options.length; i++ ) {
        if (selector.options[i].selected && (selector.options[i].value != "")) {
                if ( values != "" ) {values += ";";
		basic_astro_value += "@";
	}
                values += selector.options[i].value;
                basic_astro_value += selector.options[i].value;
        }
        }
        $('#basic_astro_hidden').val(basic_astro_value);
}
, onItemClick: function(checkbox,selector) {
	var amount_text = $('#amount');	
	var amount_value = parseInt(document.getElementById("amount").value);
	 if (checkbox.prop("checked")) {
		var new_amount_value = amount_value + parseInt(checkbox.val());
		amount_text.val(new_amount_value);
	} else {
		var new_amount_value = amount_value - parseInt(checkbox.val());
		amount_text.val(new_amount_value);

	}
          //  alert("value " + checkbox.val() + ", is checked: " + checkbox.prop("checked"));
    } });

        $("#detailed_astro").dropdownchecklist( { emptyText: "Please select ...", width: 150, forceMultiple: true, onComplete: function(selector) {
        var values = "";
	var detailed_astro_value = "";
        for( i=0; i < selector.options.length; i++ ) {
        if (selector.options[i].selected && (selector.options[i].value != "")) {
                if ( values != "" ) {values += ";"; 
		detailed_astro_value += "@";
	}
                values += selector.options[i].value;
		detailed_astro_value += selector.options[i].value;
        }
        }
	$('#detailed_astro_hidden').val(detailed_astro_value);
}
, onItemClick: function(checkbox,selector) {
        var amount_text = $('#amount');
        var amount_value = parseInt(document.getElementById("amount").value);
         if (checkbox.prop("checked")) {
                var new_amount_value = amount_value + parseInt(checkbox.val());
                amount_text.val(new_amount_value);
        //      alert("Amount is "+new_amount_value);
        } else {
                var new_amount_value = amount_value - parseInt(checkbox.val());
                amount_text.val(new_amount_value);

        }
    } });

        $("#love_marriage").dropdownchecklist( { emptyText: "Please select ...", width: 150, forceMultiple: true
, onComplete: function(selector) {
        var values = "";
        var love_marriage_value = "";
        for( i=0; i < selector.options.length; i++ ) {
        if (selector.options[i].selected && (selector.options[i].value != "")) {
                if ( values != "" ) {values += ";";
		love_marriage_value += "@";
	}
                values += selector.options[i].value;
                love_marriage_value += selector.options[i].value;
        }
        }
	$('#love_marriage_hidden').val(love_marriage_value);
}
, onItemClick: function(checkbox,selector) {
        var amount_text = $('#amount');
        var amount_value = parseInt(document.getElementById("amount").value);
         if (checkbox.prop("checked")) {
                var new_amount_value = amount_value + parseInt(checkbox.val());
                amount_text.val(new_amount_value);
        //      alert("Amount is "+new_amount_value);
        } else {
                var new_amount_value = amount_value - parseInt(checkbox.val());
                amount_text.val(new_amount_value);

        }
    } });

        $("#child_consulting").dropdownchecklist( { emptyText: "Please select ...", width: 150, forceMultiple: true
, onComplete: function(selector) {
        var values = "";
        var child_consulting_value = "";
        for( i=0; i < selector.options.length; i++ ) {
        if (selector.options[i].selected && (selector.options[i].value != "")) {
                if ( values != "" ) {values += ";";
		child_consulting_value += "@";
	}
                values += selector.options[i].value;
                child_consulting_value += selector.options[i].value;
        }
        }
	$('#child_consulting_hidden').val(child_consulting_value);
}
, onItemClick: function(checkbox,selector) {
        var amount_text = $('#amount');
        var amount_value = parseInt(document.getElementById("amount").value);
         if (checkbox.prop("checked")) {
                var new_amount_value = amount_value + parseInt(checkbox.val());
                amount_text.val(new_amount_value);
        //      alert("Amount is "+new_amount_value);
        } else {
                var new_amount_value = amount_value - parseInt(checkbox.val());
                amount_text.val(new_amount_value);

        }
    } });

        $("#education_career_business").dropdownchecklist( { emptyText: "Please select ...", width: 150, forceMultiple: true
, onComplete: function(selector) {
        var values = "";
        var education_career_business_value = "";
        for( i=0; i < selector.options.length; i++ ) {
        if (selector.options[i].selected && (selector.options[i].value != "")) {
                if ( values != "" ) {values += ";";
		education_career_business_value += "@";
	}
                values += selector.options[i].value;
                education_career_business_value += selector.options[i].value;
        }
        }
	$('#education_career_business_hidden').val(education_career_business_value);
}
, onItemClick: function(checkbox,selector) {
        var amount_text = $('#amount');
        var amount_value = parseInt(document.getElementById("amount").value);
         if (checkbox.prop("checked")) {
                var new_amount_value = amount_value + parseInt(checkbox.val());
                amount_text.val(new_amount_value);
        //      alert("Amount is "+new_amount_value);
        } else {
                var new_amount_value = amount_value - parseInt(checkbox.val());
                amount_text.val(new_amount_value);

        }
    } });

        $("#health_fitness").dropdownchecklist( { emptyText: "Please select ...", width: 150, forceMultiple: true
, onComplete: function(selector) {
        var values = "";
        var health_fitness_value = "";
        for( i=0; i < selector.options.length; i++ ) {
        if (selector.options[i].selected && (selector.options[i].value != "")) {
                if ( values != "" ) {values += ";";
		health_fitness_value += "@";
	}
                values += selector.options[i].value;
                health_fitness_value += selector.options[i].value;
        }
        }
	$('#health_fitness_hidden').val(health_fitness_value);
}
, onItemClick: function(checkbox,selector) {
        var amount_text = $('#amount');
        var amount_value = parseInt(document.getElementById("amount").value);
         if (checkbox.prop("checked")) {
                var new_amount_value = amount_value + parseInt(checkbox.val());
                amount_text.val(new_amount_value);
        //      alert("Amount is "+new_amount_value);
        } else {
                var new_amount_value = amount_value - parseInt(checkbox.val());
                amount_text.val(new_amount_value);

        }
    } });

        $("#phone_consulting").dropdownchecklist( { emptyText: "Please select ...", width: 150, forceMultiple: true
, onComplete: function(selector) {
        var values = "";
        var phone_consulting_value = "";
        for( i=0; i < selector.options.length; i++ ) {
        if (selector.options[i].selected && (selector.options[i].value != "")) {
                if ( values != "" ) {values += ";";
		phone_consulting_value += "@";
	}
                values += selector.options[i].value;
                phone_consulting_value += selector.options[i].value;
        }
        }
	$('#phone_consulting_hidden').val(phone_consulting_value);
}
, onItemClick: function(checkbox,selector) {
        var amount_text = $('#amount');
        var amount_value = parseInt(document.getElementById("amount").value);
         if (checkbox.prop("checked")) {
                var new_amount_value = amount_value + parseInt(checkbox.val());
                amount_text.val(new_amount_value);
        //      alert("Amount is "+new_amount_value);
        } else {
                var new_amount_value = amount_value - parseInt(checkbox.val());
                amount_text.val(new_amount_value);

        }
    } });

        $("#annual_subscription").dropdownchecklist( { emptyText: "Please select ...", width: 150, forceMultiple: true
, onComplete: function(selector) {
        var values = "";
        var annual_subscription_value = "";
        for( i=0; i < selector.options.length; i++ ) {
        if (selector.options[i].selected && (selector.options[i].value != "")) {
                if ( values != "" ) {values += ";";
		annual_subscription_value += "@";
		}
                values += selector.options[i].value;
                annual_subscription_value += selector.options[i].value;
        }
        }
	$('#annual_subscription_hidden').val(annual_subscription_value);
}
, onItemClick: function(checkbox,selector) {
        var amount_text = $('#amount');
        var amount_value = parseInt(document.getElementById("amount").value);
         if (checkbox.prop("checked")) {
                var new_amount_value = amount_value + parseInt(checkbox.val());
                amount_text.val(new_amount_value);
        //      alert("Amount is "+new_amount_value);
        } else {
                var new_amount_value = amount_value - parseInt(checkbox.val());
                amount_text.val(new_amount_value);

        }
    } });

        $("#family_consulting").dropdownchecklist( { emptyText: "Please select ...", width: 150, forceMultiple: true
, onComplete: function(selector) {
        var values = "";
        var family_consulting_value = "";
        for( i=0; i < selector.options.length; i++ ) {
        if (selector.options[i].selected && (selector.options[i].value != "")) {
                if ( values != "" ) {values += ";";
		family_consulting_value += "@";
	}
                values += selector.options[i].value;
                family_consulting_value += selector.options[i].value;
        }
        }
	$('#family_consulting_hidden').val(family_consulting_value);
}
, onItemClick: function(checkbox,selector) {
        var amount_text = $('#amount');
        var amount_value = parseInt(document.getElementById("amount").value);
         if (checkbox.prop("checked")) {
                var new_amount_value = amount_value + parseInt(checkbox.val());
                amount_text.val(new_amount_value);
        //      alert("Amount is "+new_amount_value);
        } else {
                var new_amount_value = amount_value - parseInt(checkbox.val());
                amount_text.val(new_amount_value);

        }
    } });

        });


     if (sessionStorage.getItem("Page2Visited")) {
          sessionStorage.removeItem("Page2Visited");
          window.location.reload(true); // force refresh page1
     }


    </script>

</head>
<?php
        //Start session
        session_start();
        require_once('connection.php');
	$u_email = $_SESSION['SESS_MEMBER_ID'];
	$fetched_results = array();
	$fetched_relations = array();
//	$u_email="goto122@gmail.com";
	$qry = "SELECT name, relationship_with_user FROM relative_info WHERE user_email = '$u_email'";
	$result = mysql_query( $qry);
	if(! $result )
	{
  		die('Could not get data: ' . mysql_error());
	}
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	{
		$fetched_results[] = $row['name'];
		$fetched_relations[] = $row['relationship_with_user'];
		
	}
 
?>

<body onload="prettyPrint();" bgcolor="red">
<?php require_once('menu.php'); ?>
<p><div align="center" style="margin-top:30px">
<font color="#242A56">
<h2>-: <u>Products Selection</u> :-</h2></p>
</div>
<form id="products" name="products" method="post" action="order_preview.php">
<table border="2" style="width:75%;margin-top:25px;margin-left:200px">
<tr>
<th id="product_name">Product Name</th>
<th id="product_buying_for">Buying For</th>
<th id="product_price">Price</th>
</tr>
<tr>
<td align="left">
Basic Astro Consulting with 3 Questions
</td>
<td align="left">
                <select id="basic_astro_list" name="basic_astro_list">
                <option value="0"></option>
                <option value="11 Self&Self">Self</option>
<?php
		for($j=0;$j<count($fetched_results);$j++) {
		$value = $fetched_results[$j]."&".$fetched_relations[$j];
?>
                <option value="11 <?php echo $value; ?>"><?php echo $fetched_results[$j]; ?></option>
        	
<?php		}
?>
                </select>
</td>
<td align="center">
$11.00
</td>
<input type="hidden" id="basic_astro_hidden" name="basic_astro_hidden" value="">
</tr>
<tr>
<td align="left">
Detailed Astro Consulting with 5 Questions
</td>
<td align="left">
                <select id="detailed_astro" name="detailed_astro">
                <option value="0"></option>
                <option value="31 Self&Self">Self</option>
<?php
                for($j=0;$j<count($fetched_results);$j++) {
		$value = $fetched_results[$j]."&".$fetched_relations[$j];
?>
                <option value="31 <?php echo $value; ?>"><?php echo $fetched_results[$j]; ?></option>

<?php           }
?>
                </select>
</td>
<td align="center">
$31.00
</td>
<input type="hidden" id= "detailed_astro_hidden" name="detailed_astro_hidden" value="">
</tr>
<tr>
<td align="left">
Love & Marriage  Consulting
</td>
<td align="left">
                <select id="love_marriage" name="love_marriage">
                <option value="0"></option>
                <option value="21 Self&Self">Self</option>
<?php
                for($j=0;$j<count($fetched_results);$j++) {
		$value = $fetched_results[$j]."&".$fetched_relations[$j];
?>
                <option value="21 <?php echo $value; ?>"><?php echo $fetched_results[$j]; ?></option>

<?php           }
?>
                </select>
</td>
<td align="center">
$21.00
</td>
<input type="hidden" id="love_marriage_hidden" name="love_marriage_hidden" value="">
</tr>
<tr>
<td align="left">
Child  Consulting
</td>
<td align="left">
                <select id="child_consulting" name="child_consulting">
                <option value="0"></option>
                <option value="21 Self&Self">Self</option>
<?php
                for($j=0;$j<count($fetched_results);$j++) {
		$value = $fetched_results[$j]."&".$fetched_relations[$j];
?>
                <option value="21 <?php echo $value; ?>"><?php echo $fetched_results[$j]; ?></option>

<?php           }
?>
                </select>
</td>
<td align="center">
$21.00
</td>
<input type="hidden" id="child_consulting_hidden" name="child_consulting_hidden" value="">
</tr>
<tr>
<td align="left">
Education, Carrear and Business Consulting
</td>
<td align="left">
                <select id="education_career_business" name="education_career_business">
                <option value="0"></option>
                <option value="21 Self&Self">Self</option>
<?php
                for($j=0;$j<count($fetched_results);$j++) {
		$value = $fetched_results[$j]."&".$fetched_relations[$j];
?>
                <option value="21 <?php echo $value; ?>"><?php echo $fetched_results[$j]; ?></option>

<?php           }
?>
                </select>
</td>
<td align="center">
$21.00
</td>
<input type="hidden" id="education_career_business_hidden" name="education_career_business_hidden" value="">
</tr>
<tr>
<td align="left" style="width:60%">
Health and Fitness Consulting
</td>
<td align="left" style="width:18%">
                <select id="health_fitness" name="health_fitness" >
                <option value="0"></option>
                <option value="21 Self&Self">Self</option>
<?php
                for($j=0;$j<count($fetched_results);$j++) {
		$value = $fetched_results[$j]."&".$fetched_relations[$j];
?>
                <option value="21 <?php echo $value; ?>"><?php echo $fetched_results[$j]; ?></option>

<?php           }
?>
                </select>
</td>
<td align="center">
$21.00
</td>
<input type="hidden" id="health_fitness_hidden" name="health_fitness_hidden" value="">
</tr>
<tr>
<td align="left">
30 Min Phone Consulting(with Basic Astro)
</td>
<td align="left">
                <select id="phone_consulting" name="phone_consulting">
                <option value="0"></option>
                <option value="21 Self&Self">Self</option>
<?php
                for($j=0;$j<count($fetched_results);$j++) {
		$value = $fetched_results[$j]."&".$fetched_relations[$j];
?>
                <option value="21 <?php echo $value; ?>"><?php echo $fetched_results[$j]; ?></option>

<?php           }
?>
                </select>
</td>
<td align="center">
$21.00
</td>
<input type="hidden" id="phone_consulting_hidden" name="phone_consulting_hidden" value="">
</tr>
<tr>
<td align="left">
Annual subscription (time to time)
</td>
<td align="left">
                <select id="annual_subscription" name="annual_subscription">
                <option value="0"></option>
                <option value="51 Self&Self">Self</option>
<?php
                for($j=0;$j<count($fetched_results);$j++) {
		$value = $fetched_results[$j]."&".$fetched_relations[$j];
?>
                <option value="51 <?php echo $value; ?>"><?php echo $fetched_results[$j]; ?></option>

<?php           }
?>
                </select>
</td>
<td align="center">
$51.00
</td>
<input type="hidden" id="annual_subscription_hidden" name="annual_subscription_hidden" value="">
</tr>
<tr>
<td align="left">
Family Consulting
</td>
<td align="left">
                <select id="family_consulting" name="family_consulting">
                <option value="0"></option>
                <option value="101 Family&Family">Family</option>
                </select>
</td>
<td align="center">
$101.00
</td>
<input type="hidden" id="family_consulting_hidden" name="family_consulting_hidden" value="">
</tr>
</table>
<hr style="width:75%;margin-top:25px;margin-left:200px">
<table border="0" style="width:75%;margin-top:25px;margin-left:200px">
<tr>
<td align="right" style="width:75%">
Fee:
</td>
<td align="right">
$<input type="text" name="fee" id="fee" readonly="readonly" value="0">
</td>
</tr>
<tr>
<td align="right" style="width:75%">
Total Amount:
</td>
<td align="right">
$<input type="text" name="amount" id="amount" readonly="readonly" value="0">
</td>
</tr>
</table>
<table border="0" style="width:75%;margin-top:20px;margin-left:200px">
<tr>
<td align="right">
<input type="submit" name="continue" value=" Preview Your Order ">
</td>
</tr>
</table>
</form>
</body>
