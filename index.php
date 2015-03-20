<!DOCTYPE html>
<html lang="en">
<!-- Latest compiled and minified CSS -->
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="https://js.braintreegateway.com/v2/braintree.js"></script>
<script>
  var braintree = Braintree.create('MIIBCgKCAQEA6KZ2wcNtiTc9fSAw4iKNhIU2DUOfG/MQFBe5tQPFam/OjOmOgh0uU0mtS9sxCIeZcVm1FLbTR3UqfaOVVKcXAbsILQwK0PGtdiO96PaFhSlbyECO0P9369K0F1otC+aCdejxCemx4E7I78jQxn1iofooDjoBitxud6zfKRTquS6ZWdKaUC8tmVyHRJpigA64CWmtzJ1mG8Ixw93ElNKm+QLYMOx1D4O2lgrgV8YVTCtbg2yn3SGCf5WZNWu3xeEoiy740xD0UfZcKu85xauj/F6maIxSB8hSRwy+BuaBuKpFuBifPNfeAJDSk0/RRrjuianMfwAAW8iLAZo57uHZPwIDAQAB');
  //braintree.setup("CLIENT-TOKEN-FROM-SERVER", "<integration>", options);
</script>
</head>


<?php
/**
 * Configurations
 */
require_once('braintree-php-2.37.0/lib/Braintree.php');
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('798g8p9m5ywqkx2w');
Braintree_Configuration::publicKey('rcyk692mb4n673sc');
Braintree_Configuration::privateKey('3c29980b60a25f02b36990e05fe1d94e');
/**
 * Use Case 1
 */
print 'Add a sub merchant ' . '<a class="btn btn-default" href = "add-merchant.php">Click</a><br><br>';
/**
 * Use Case 2
 */
print 'Do a sale without escrow ' . '<a class="btn btn-default" href = "checkout.php">Click</a><br><br>';
/**
 * Use Case 3
 */
print 'Do a sale without escrow and old customer, you will need to know the customer id ' . '<a class="btn btn-default" href = "sale-without-customer.php">Click</a><br><br>';
print 'See this for settlement status  ' . '<a class="btn btn-default" href = "https://developers.braintreepayments.com/javascript+php/sdk/server/transaction-processing/overview#statuses">Click</a><br><br>';
?>
</html>