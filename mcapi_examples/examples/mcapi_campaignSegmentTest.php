<?php
/**
This Example shows how to test a List Segment for use with a new campaign 
via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$conditions = array();
$conditions[] = array('field'=>'email', 'op'=>'like', 'value'=>'mailchimp');
$opts = array('match'=>'all', 'conditions'=>$conditions);

$retval = $this->mcapi->campaignSegmentTest($listId, $opts );
if ($this->mcapi->errorCode){
	echo "Unable to Segment Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "Your Segement matched [".$retval."] members.\n";
}
?>
