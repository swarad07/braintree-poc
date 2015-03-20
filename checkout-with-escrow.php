<!DOCTYPE html>
<html lang="en">
<!-- Latest compiled and minified CSS -->
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

<script src="https://js.braintreegateway.com/v2/braintree.js"></script>
<script>
  var braintree = Braintree.create('MIIBCgKCAQEA6KZ2wcNtiTc9fSAw4iKNhIU2DUOfG/MQFBe5tQPFam/OjOmOgh0uU0mtS9sxCIeZcVm1FLbTR3UqfaOVVKcXAbsILQwK0PGtdiO96PaFhSlbyECO0P9369K0F1otC+aCdejxCemx4E7I78jQxn1iofooDjoBitxud6zfKRTquS6ZWdKaUC8tmVyHRJpigA64CWmtzJ1mG8Ixw93ElNKm+QLYMOx1D4O2lgrgV8YVTCtbg2yn3SGCf5WZNWu3xeEoiy740xD0UfZcKu85xauj/F6maIxSB8hSRwy+BuaBuKpFuBifPNfeAJDSk0/RRrjuianMfwAAW8iLAZo57uHZPwIDAQAB');
</script>
</head>

<div id ="target" style="display:none;">
<?php 
require_once('braintree-php-2.37.0/lib/Braintree.php');
/**
 * Configurations
 */
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('798g8p9m5ywqkx2w');
Braintree_Configuration::publicKey('rcyk692mb4n673sc');
Braintree_Configuration::privateKey('3c29980b60a25f02b36990e05fe1d94e');

// Generate client token
$clientToken = Braintree_ClientToken::generate();
echo $clientToken;
// Pass this to JS

// Use this constructor to get the client sdk initialized with returninig customer

// $clientToken = Braintree_ClientToken::generate(array(
//     "customerId" => $aCustomerId
// ));

?>
</div>

<form id="checkout" method="post" action="sale-with-escrow.php">
  <div id="dropin"></div>
  <input type="submit" value="Pay">
  <input type="text" name="money" placeholder="We will do a 60-40 split.">
</form>

<script src="https://js.braintreegateway.com/v2/braintree.js"></script>

<script>
  var div = document.getElementById("target");
  var myData = div.textContent;
  braintree.setup(
    myData,
    'dropin', {
      container: 'dropin'
    });
</script>

</html>