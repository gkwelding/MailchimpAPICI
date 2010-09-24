<?php
/**
This Example shows how to immediately send a Campaign via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->campaignSendNow($campaignId);

if ($this->mcapi->errorCode){
	echo "Unable to Send Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "Campaign Sent!\n";
}
?>
