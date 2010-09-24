<?php
/**
This Example shows how to send Campaign Tests via the MCAPI codeigniter library.
Note that a max of 25 of these may be sent
**/
$this->load->library('mcapi');

$emails = array($my_email, $boss_man_email);

$retval = $this->mcapi->campaignSendTest($campaignId, $emails);

if ($this->mcapi->errorCode){
	echo "Unable to Send Test Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "Campaign Tests Sent!\n";
}
?>
