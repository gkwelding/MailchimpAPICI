<?php
/**
This Example shows how to retrieve Analytics data collected for a campaign with
some basic error checking.
**/
$this->load->library('mcapi');

$stats = $this->mcapi->campaignAnalytics($campaignId);

if ($this->mcapi->errorCode){
	echo "Unable to run campaignAnalytics()!\n";
	echo "\tCode=".$this->mcapi->errorCode."\n";
	echo "\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    echo "Visits: ".$stat['visits']."\n";
    echo "Pages: ".$rpt['pages']."\n";
    echo "Goals ".$rpt['type']."\n";
	
    if ($stat['goals']){
        foreach($stat['goals'] as $goal){
            echo "\t".$goal['name']." => ".$goal['conversions']."\n";
        }
    }
}
?> 
