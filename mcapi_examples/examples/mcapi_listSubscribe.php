<?php
/**
This Example shows how to Subscribe a New Member to a List using the MCAPI codeigniter library 
class and do some basic error checking.
**/
$this->load->library('mcapi');

/** 
Note that if you are not passing merge_vars, you will still need to
pass a "blank" array. That should be either:
	$merge_vars = array('');
	   - or -
	$merge_vars = '';
Specifically, this will fail:
	$merge_vars = array();
Or pass the proper data as below...
*/
$merge_vars = array('FNAME'=>'Test', 'LNAME'=>'Account', 'INTERESTS'=>'');

// By default this sends a confirmation email - you will not see new members
// until the link contained in it is clicked!
$retval = $this->mcapi->listSubscribe( $listId, $my_email, $merge_vars );

if ($this->mcapi->errorCode){
	echo "Unable to load listSubscribe()!\n";
	echo "\tCode=".$this->mcapi->errorCode."\n";
	echo "\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    echo "Returned: ".$retval."\n";
}
?>
