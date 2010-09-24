<?php
/**
This Example shows how to Update an A/B Split Campaign via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->getAffiliateInfo();

if ($this->mcapi->errorCode){
	echo "Unable to Retrieve Affiliate Info!\n";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "Your Affiliate Info:\n";
    echo "User Id = ".$retval['user_id']."\n";
    echo "Rewards link = ".$retval['url']."\n";
}
?>
