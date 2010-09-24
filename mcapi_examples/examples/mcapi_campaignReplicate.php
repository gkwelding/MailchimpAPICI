<?php
/**
This Example shows how to send Replicate Campaigns via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->campaignReplicate($campaignId);

if ($this->mcapi->errorCode){
	echo "Unable to Replicate Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "New Campaign Id = $retval\n";
}
?>
