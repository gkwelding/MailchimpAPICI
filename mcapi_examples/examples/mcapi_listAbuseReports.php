<?php
$this->load->library('mcapi');

$reports = $this->mcapi->listAbuseReports($listId);

if ($this->mcapi->errorMessage!=''){
	echo "Unable to run listAbuseReports()!\n";
	echo "\tCode=".$this->mcapi->errorCode."\n";
	echo "\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    foreach($reports as $rpt){
        echo $rpt['date']." - ".$rpt['email']." - ";
        echo $rpt['campaign_id']." - ".$rpt['type']."\n";   
    }
}
?> 
