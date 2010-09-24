<?php
/**
This Example shows how to expire an API key using the MCAPI codeigniter library class and do 
some basic error checking.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->apikeyExpire($username, $password);

if ($this->mcapi->errorCode){
	echo "Unable to Expire API Key()!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "API Key Expired:".$this->mcapi->api_key."\n";
}
?>
