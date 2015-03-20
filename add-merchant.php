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
$result = Braintree_MerchantAccount::create(
  array(
    'individual' => array(
      'firstName' => 'Test::$approve',
      'lastName' => 'Mentor four',
      'email' => 'mentorfour@14ladders.com',
      'phone' => '5553334444',
      'dateOfBirth' => '1981-11-19',
      'ssn' => '456-45-4569',
      'address' => array(
        'streetAddress' => '111 Main St',
        'locality' => 'Chicago',
        'region' => 'IL',
        'postalCode' => '60622'
      )
    ),
    'funding' => array(
      'descriptor' => 'tm4',
      'destination' => Braintree_MerchantAccount::FUNDING_DESTINATION_BANK,
      'email' => 'tm3@blueladders.com',
      'mobilePhone' => '5555555555',
      'accountNumber' => '1123581321',
      'routingNumber' => '071101307'
    ),
    'tosAccepted' => true,
    'masterMerchantAccountId' => "t4m527kwfg9tztxk",
    'id' => "test_mentor_4"
  )
);

print '<pre>'; print_r($result); print '</pre>'; 
print 'Success: (TRUE) ' . $result->success;
// true
print 'Status: (PENDING) ' . $result->merchantAccount->status;
// "pending"
print 'Sub Merchant ID: (ID) ' . $result->merchantAccount->id;
// "blue_ladders_store"
print 'Merchant ID: (ID) ' . $result->merchantAccount->masterMerchantAccount->id;
// "14ladders_marketplace"
print 'Master Merchant status: (ID)' . $result->merchantAccount->masterMerchantAccount->status;
exit();

?>
</html>