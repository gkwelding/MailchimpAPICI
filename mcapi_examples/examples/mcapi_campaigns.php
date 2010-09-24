<?php
/**
This Example shows how to retrieve a list of your campaigns via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->campaigns();

if ($this->mcapi->errorCode){
	echo "Unable to Pull list of Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    echo sizeof($retval)." Campaigns Returned:\n";
	
    foreach($retval as $c){
        echo "Campaign Id: ".$c['id']." - ".$c['title']."\n";
        echo "\tStatus: ".$c['status']." - type = ".$c['type']."\n";
        echo "\tsent: ".$c['send_time']." to ".$c['emails_sent']." members\n";
    }
}
?>
