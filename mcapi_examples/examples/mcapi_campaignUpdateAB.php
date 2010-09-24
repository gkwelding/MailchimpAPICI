<?php
/**
This Example shows how to Update an A/B Split Campaign via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$field = "absplit";
$value = "My New Title";
$ab_opts = array();
$ab_opts['split_test'] = 'from_name';
$ab_opts['pick_winner'] = 'manual';
$ab_opts['from_name_a'] = 'David Gilmour';
$ab_opts['from_email_a'] = 'david@example.org';
$ab_opts['from_name_b'] = 'Roger Waters';
$ab_opts['from_email_b'] = 'roger@example.org';

$retval = $this->mcapi->campaignUpdate($campaignId, $field, $ab_opts);

if ($this->mcapi->errorCode){
	echo "Unable to Update Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    echo "SUCCESS!\n";
}
?>
