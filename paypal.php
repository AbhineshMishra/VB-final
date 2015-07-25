<?php
        //Start session
        session_start();
        require_once('connection.php');
        $user_email = $_SESSION['SESS_MEMBER_ID'];
?>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="testbusinessVBaba@gmail.com">

<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Specify details about the item that buyers will purchase. -->
<?php
if ($_SESSION['basic_astro_product'] != "") {
$basic_astro_product = $_SESSION['basic_astro_product'];
$basic_astro_amount = $_SESSION['basic_astro_amount'];
?>
<input type="hidden" name="item_name" value="<?php echo $basic_astro_product; ?>">
<input type="hidden" name="amount" value="<?php echo $basic_astro_amount; ?>">
<input type="hidden" name="currency_code" value="USD">

<?php
}

if ($_SESSION['annual_subscription_product'] != "") {
?>
<input type="hidden" name="item_name" value="<?php echo $_SESSION['annual_subscription_product']; ?>">
<input type="hidden" name="amount" value="<?php echo $_SESSION['annual_subscription_amount']; ?>">
<input type="hidden" name="currency_code" value="USD">

<?php
}

if ($_SESSION['family_consulting'] != "") {
?>
<input type="hidden" name="item_name" value="<?php echo $_SESSION['family_consulting']; ?>">
<input type="hidden" name="amount" value="<?php echo $_SESSION['family_consulting']; ?>">
<input type="hidden" name="currency_code" value="USD">

<?php
}
?>

<input type="hidden" name="return" value="http://customer.vedicbaba.com/paypal_success.php">
<input type="hidden" name="cancel_return" value="http://customer.vedicbaba.com/paypal_cancel.php">

<!-- Display the payment button. -->
<input type="image" name="submit" border="0"
src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
alt="PayPal - The safer, easier way to pay online">
<img alt="" border="0" width="1" height="1"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
