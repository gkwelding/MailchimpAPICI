<?php
/**
This Example shows how to pull basic stats for a Campaign Tests 
via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->campaignStats($campaignId);

if ($this->mcapi->errorCode){
	echo "Unable to Load Campaign Stats!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    echo "Stats for ".$campaignId."\n";
	
    foreach($retval as $k=>$v){
        echo "\t".$k." => ".$v."\n";
    }
}
?>
