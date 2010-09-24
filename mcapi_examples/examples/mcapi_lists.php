<?php
/**
This Example shows how to pull the Members of a List using the MCAPI codeigniter library 
class and do some basic error checking.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->lists();

if ($this->mcapi->errorCode){
	echo "Unable to load lists()!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "Your lists:\n";
	
	foreach ($retval as $list){
		echo "Id = ".$list['id']." - ".$list['name']." - ".$list['web_id']."\n";
		echo "\tSub = ".$list['member_count']."\tUnsub=".$list['unsubscribe_count']."\tCleaned=".$list['cleaned_count']."\n";
	}
}
?>
