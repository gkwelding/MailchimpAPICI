<?php
/**
This Example shows how to run a Batch Subscribe on a List using the MCAPI codeigniter library 
class and do some basic error checking or handle the return values.
**/
$this->load->library('mcapi');

$batch[] = array('EMAIL'=>$my_email, 'FNAME'=>'Joe', 'INTERESTS'=>'Water,Air');
$batch[] = array('EMAIL'=>$boss_man_email, 'FNAME'=>'Me', 'LNAME'=>'Chimp');

$optin = true; //yes, send optin emails
$up_exist = true; // yes, update currently subscribed users
$replace_int = false; // no, add interest, don't replace

$vals = $this->mcapi->listBatchSubscribe($listId,$batch,$optin, $up_exist, $replace_int);

if ($this->mcapi->errorCode){
    echo "Batch Subscribe failed!\n";
	echo "code:".$this->mcapi->errorCode."\n";
	echo "msg :".$this->mcapi->errorMessage."\n";
} else {
	echo "success:".$vals['success_count']."\n";
	echo "errors:".$vals['error_count']."\n";
	
	foreach($vals['errors'] as $val){
		echo $val['email_address']. " failed\n";
		echo "code:".$val['code']."\n";
		echo "msg :".$val['message']."\n";
	}}
?> 
