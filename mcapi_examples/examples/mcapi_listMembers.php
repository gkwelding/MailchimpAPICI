<?php
/**
This Example shows how to pull the Members of a List using the MCAPI codeigniter library 
class and do some basic error checking.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->listMembers($listId, 'subscribed', null, 0, 5000 );

if ($this->mcapi->errorCode){
	echo "Unable to load listMembers()!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
	echo "Members returned: ". sizeof($retval). "\n";
} else {
	echo "Members returned: ". sizeof($retval). "\n";
	
	foreach($retval as $member){
	    echo $member['email']." - ".$member['timestamp']."\n";
	}
}
?> 
