<?php
/**
This Example shows how to retrieve campaign Advice messages from the API with
some basic error checking.
**/
$this->load->library('mcapi');

// Connect to the MailChimp server with the user's credentials.
$advice = $this->mcapi->campaignAdvice($campaignId);

if ($this->mcapi->errorCode){
	echo "Unable to run campaignAdvice()!\n";
	echo "\tCode=".$this->mcapi->errorCode."\n";
	echo "\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    if (sizeof($advice)>0){
        foreach($advice as $adv){
            echo "Type: ".$adv['type']."\n";
            echo "Message: ".$adv['msg']."\n";
        }
    } else {
        echo "Sorry, no advice for this campaign!\n";
    }
}
?> 
