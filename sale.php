<!DOCTYPE html>
<html lang="en">
<!-- Latest compiled and minified CSS -->
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="https://js.braintreegateway.com/v2/braintree.js"></script>
<script>
  var braintree = Braintree.create('MIIBCgKCAQEA6KZ2wcNtiTc9fSAw4iKNhIU2DUOfG/MQFBe5tQPFam/OjOmOgh0uU0mtS9sxCIeZcVm1FLbTR3UqfaOVVKcXAbsILQwK0PGtdiO96PaFhSlbyECO0P9369K0F1otC+aCdejxCemx4E7I78jQxn1iofooDjoBitxud6zfKRTquS6ZWdKaUC8tmVyHRJpigA64CWmtzJ1mG8Ixw93ElNKm+QLYMOx1D4O2lgrgV8YVTCtbg2yn3SGCf5WZNWu3xeEoiy740xD0UfZcKu85xauj/F6maIxSB8hSRwy+BuaBuKpFuBifPNfeAJDSk0/RRrjuianMfwAAW8iLAZo57uHZPwIDAQAB');
</script>
</head>

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
?>

<script type="text/javascript">
braintree.setup(<?php print $clientToken; ?>, "dropin", {
  container: "checkout"
});
</script>

<form id="checkout" action="sale.php" method="post">
  <input data-braintree-name="number" value="4111111111111111">
  <input data-braintree-name="expiration_date" value="10/20">
  <input type="submit" id="submit" value="Pay">
</form>

<?php
/**
 * Use Case 2
 */

$post = $_POST;
print '<pre>'; print_r($post); print '</pre>'; 

$result = Braintree_Transaction::sale(
  array(
    'amount' => '100.00',
    'merchantAccountId' => 'test_mentor_1',
    'paymentMethodNonce' => 'NONCE-RECEIVED-FROM-YOUR-CLIENT',
    'options' => array(
      'submitForSettlement' => true,
      'holdInEscrow' => false,
    ),
    'serviceFeeAmount' => '40.00'
  )
);

print '<pre>'; print_r($result); print '</pre>'; 
exit();

?>
</html>