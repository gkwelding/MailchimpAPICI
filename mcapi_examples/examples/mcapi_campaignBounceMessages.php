<?php
/**
This Example shows how to retrieve full Bounce Message data associated with a
campaign and do some basic error checking.
**/
$this->load->library('mcapi');

$msgs = $this->mcapi->campaignBounceMessages($campaignId);

if ($this->mcapi->errorCode){
	echo "Unable to run campaignBounceMessages()!\n";
	echo "\tCode=".$this->mcapi->errorCode."\n";
	echo "\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    foreach($msgs as $msg){
        echo $msg['date']." - ".$msg['email']."\n";
        echo substr($msg['message'],0,150)."\n\n";
    }
}
?> 
