<?php
/**
This Example shows how to send Delete Campaigns via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->createFolder('MyTestFolder');

if ($this->mcapi->errorCode){
	echo "Unable to createFolder!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "Folder created! Id=".$retval."\n";
}
?>
