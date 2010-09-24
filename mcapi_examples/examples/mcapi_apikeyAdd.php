<?php
/**
This Example shows how to add a new API key using the MCAPI codeigniter library class and do
some basic error checking.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->apiKeyAdd($username, $password);

if ($this->mcapi->errorCode){
	echo "Unable to load Add a New API Key()!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "New API Key:".$retval."\n";
}
?>
