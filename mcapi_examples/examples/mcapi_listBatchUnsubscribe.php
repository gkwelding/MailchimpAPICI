<?php
/**
This Example shows how to run a Batch Unsubscribe on a List using the MCAPI codeigniter library 
class and do some basic error checking or handle the return values.
**/
$this->load->library('mcapi');

$emails = array($my_email, $boss_man_email);
$delete = false; //don't completely remove the emails
$bye = true; // yes, send a goodbye email
$notify = false; // no, don't tell me I did this

$vals = $this->mcapi->listBatchUnsubscribe($listId, $emails, $delete, $bye, $notify);

if ($this->mcapi->errorCode){
	// an api error occurred
	echo "code:".$this->mcapi->errorCode."\n";
	echo "msg :".$this->mcapi->errorMessage."\n";
} else {
	echo "success:".$vals['success_count']."\n";
	echo "errors:".$vals['error_count']."\n";
	
	foreach($vals['errors'] as $val){
		echo "\t*".$val['email']. " failed\n";
		echo "\tcode:".$val['code']."\n";
		echo "\tmsg :".$val['message']."\n\n";
	}
}
?> 
