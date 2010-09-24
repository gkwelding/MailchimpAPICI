<?php
/**
This Example shows how to pull and iterate through a campaignClickStats call via
using the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$stats = $this->mcapi->campaignClickStats($campaignId);

if ($this->mcapi->errorCode){
    echo "Unable to load campaignClickStats()!\n\t";
    echo "Code=".$this->mcapi->errorCode."\n\t";
    echo "Msg=".$this->mcapi->errorMessage."\n";
} else {
    if (sizeof($stats)==0){
        echo "No stats for this campaign yet!\n";
    } else {
	    foreach($stats as $url=>$detail){
		    echo "URL: ".$url."\n";
		    echo "\tClicks = ".$detail['clicks']."\n";
		    echo "\tUnique Clicks = ".$detail['unique']."\n";
	    }
    }
}
?> 
