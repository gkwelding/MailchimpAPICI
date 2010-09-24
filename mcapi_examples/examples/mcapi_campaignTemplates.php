<?php
/**
This Example shows how to retrieve a list of your Campaign Templates
via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->campaignTemplates();

if ($this->mcapi->errorCode){
	echo "Unable to Load Templates!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "Your templates:\n";
	
	foreach($retval as $tmpl){
	    echo $tmpl['id']." - ".$tmpl['name']." - ".$tmpl['layout']."\n";
	}
}
?>
