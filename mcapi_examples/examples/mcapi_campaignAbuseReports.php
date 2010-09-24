<?php
/**
This Example shows how to add grab a full set of Campaign Abuse Reports wtih 
some basic error checking.
**/
$this->load->library('mcapi');

// Connect to the MailChimp api with an API Key
$reports = $this->mcapi->campaignAbuseReports($campaignId);

if ($this->mcapi->errorCode){
	echo "Unable to run campaignAbuseReports()!\n";
	echo "\tCode=".$this->mcapi->errorCode."\n";
	echo "\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    foreach($reports as $rpt){
        echo $rpt['date']." - ".$rpt['email']." - ".$rpt['type']."\n";
    }
}
?>
