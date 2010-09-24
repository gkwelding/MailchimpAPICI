<?php
/**
This Example shows how to send Delete Campaigns via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->campaignDelete($campaignId);

if ($this->mcapi->errorCode){
	echo "Unable to Delete Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "Campaign Deleted!\n";
}
?>
