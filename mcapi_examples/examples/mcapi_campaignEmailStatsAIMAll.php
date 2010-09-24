<?php
/**
This Example shows how to iterate through the AIM stats for every email address
associated with a campaign and do some basic error checking.
**/
$this->load->library('mcapi');

$limit = 5;

for($i=0;$i<5;$i++){
    echo "====== Page $i : START ======\n";
	
    $allstats = $this->mcapi->campaignEmailStatsAIMAll($campaignId, $i*$limit, $limit);
	
    if ($this->mcapi->errorCode){
	    echo "Unable to run campaignEmailStatsAIMAll()";
	    echo "\n\tCode=".$this->mcapi->errorCode;
	    echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
		
        exit;
    }
    if (sizeof($allstats)==0){
        echo "No more stats available!\n";
		
        exit;
    }
    foreach($allstats as $email=>$stats){
        echo "[".$email."]\n";
		
        foreach($stats as $stat){
            echo "\t".$stat['action']." @ ".$stat['timestamp'];
			
            if ($stat['action']=='click'){
                echo "\n\tURL =  ".$stat['url']."\n";
            } else {
                echo "\n";
            }
        }
    }
	
    echo "====== Page $i : END   ======\n";
}
?>
