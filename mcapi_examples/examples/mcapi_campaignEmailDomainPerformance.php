<?php
/**
This Example shows how to retrieve email domain performance for a campaign via
the API and do some basic error checking.
**/
$this->load->library('mcapi');

$domains = $this->mcapi->campaignEmailDomainPerformance($campaignId);

if ($this->mcapi->errorCode){
	echo "Unable to run campaignEmailDomainPerformance()!\n";
	echo "\tCode=".$this->mcapi->errorCode."\n";
	echo "\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    if (sizeof($domains)==0){
        echo "No Email Domain stats yet!\n";
    } else {
        foreach($domains as $domain){
            echo $domain['domain']."\n";
            echo "\tEmails: ".$domain['emails']."\n";
            echo "\tOpens: ".$domain['opens']."\n";
            echo "\tClicks: ".$domain['clicks']."\n";
        }
    }
}
?> 
