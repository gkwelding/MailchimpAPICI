<?php
/**
This Example shows how to update a List Member's information using the MCAPI codeigniter library 
class and do some basic error checking.
**/
$this->load->library('mcapi');

$merge_vars = array("FNAME"=>'Richard', "LNAME"=>'Wright');

$retval = $this->mcapi->listUpdateMember($listId, $my_email, $merge_vars, 'html', false);

if ($this->mcapi->errorCode){
	echo "Unable to update member info!\n";
	echo "\tCode=".$this->mcapi->errorCode."\n";
	echo "\tMsg=".$this->mcapi->errorMessage."\n";
} else {    
	echo "Returned: ".$retval."\n";
}
?>
