<?php
require 'vendor/autoload.php';
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
use Egulias\EmailValidator\Validation\DNSCheckValidation;

if(isset($_POST['email']))
{
	$email = $_POST['email'];
	$validator = new EmailValidator();
	$RFCValidation = new RFCValidation();
	$DNSCheckValidation = new DNSCheckValidation();
	// $result = $validator->isValid($email, new RFCValidation());
	// $result = $validator->isValid($email, new DNSCheckValidation());
	$result = $validator->isValid($email, $RFCValidation);
	var_dump($result);
}
?>
<form method="post">
<input type="text" name="email">
<button type="submit" name="submit">submit</button>
</form>
