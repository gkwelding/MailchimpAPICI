<?php
/**
This Example shows how to pull the Info for a Member of a List using the MCAPI codeigniter library 
class and do some basic error checking.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->listUnsubscribe( $listId,$my_email);

if ($this->mcapi->errorCode){
    echo "Unable to load listUnsubscribe()!\n";
	echo "\tCode=".$this->mcapi->errorCode."\n";
	echo "\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    echo "Returned: ".$retval."\n";
}
?>
