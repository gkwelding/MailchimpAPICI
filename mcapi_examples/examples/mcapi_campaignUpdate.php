<?php
/**
This Example shows how to Update a regular Campaign via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$field = "title";
$value = "My New Title";

$retval = $this->mcapi->campaignUpdate($campaignId, $field, $value);

if ($this->mcapi->errorCode){
	echo "Unable to Update Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    echo "SUCCESS! \n";
}
?>
