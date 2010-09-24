<?php
/**
This Example shows how to unschedule a campaign currently scheduled for delivery
via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->campaignUnschedule($campaignId);

if ($this->mcapi->errorCode){
	echo "Unable to Unschedule Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "Campaign Unscheduled!\n";
}
?>
