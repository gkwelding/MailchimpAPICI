<?php
/**
This Example shows how to create a basic campaign via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$type = 'regular';

$opts['list_id'] = 'f9ee6d8616';
$opts['subject'] = 'Test Newsletter Subject';
$opts['from_email'] = 'mailchimp@example.org'; 
$opts['from_name'] = 'ACME, Inc.';
$opts['tracking']=array('opens' => true, 'html_clicks' => true, 'text_clicks' => false);
$opts['authenticate'] = true;
$opts['analytics'] = array('google'=>'my_google_analytics_key');
$opts['title'] = 'Test Newsletter Title';

$content = array('html'=>'some pretty html content *|UNSUB|* message', 'text' => 'text text text *|UNSUB|*');
/** OR we could use this:
$content = array('html_main'=>'some pretty html content',
		 'html_sidecolumn' => 'this goes in a side column',
		 'html_header' => 'this gets placed in the header',
		 'html_footer' => 'the footer with an *|UNSUB|* message', 
		 'text' => 'text content text content *|UNSUB|*'
		);
$opts['template_id'] = "1";
**/

$retval = $this->mcapi->campaignCreate($type, $opts, $content);

if ($this->mcapi->errorCode){
	echo "Unable to Create New Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "New Campaign ID:".$retval."\n";
}
?>
