<?php
$encryptedData = "033ebc1f7e02174e4b386ee7981de53fa6adea5f:906dc483564123d3:MX5LvTGYIapoX1ELjqFX6Q=="; // Your encrypted data
// $key = "your_secret_key";
// $iv = "your_iv"; // Initialization Vector (IV)
$key = "14504397AEA35BD9374EEA1F708013FA6472A4463B0A3982B225A5BE7322BA05";
$iv = '56666852251557009888889955123458'; 

$salt = "033ebc1f7e02174e4b386ee7981de53fa6adea5f";//sha1(mt_rand());
$iv = "906dc483564123d3";//substr(sha1(mt_rand()), 0, 16);
$message = 'opensesame';

// $decryptedData = openssl_decrypt($encryptedData, 'aes-256-cbc', $key:$message, null, $iv);

	$components = explode( ':', $encryptedData );

		//var_dump($components);

		$salt          = $components[0];
		$iv            = $components[1];
		$encrypted_msg = $components[2];

		
$decrypted_msg = openssl_decrypt(
		  "$encrypted_msg", 'aes-256-cbc', "$salt:$message", null, $iv
		);

if ($decrypted_msg === false) {
    echo "Decryption failed.";
} else {
	$msg = substr( $decrypted_msg, 41 );
			return $decrypted_msg;
    echo "Decrypted data: " . $decrypted_msg;
}
?>