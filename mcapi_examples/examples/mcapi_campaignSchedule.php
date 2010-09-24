<?php
/**
This Example shows how to schedule a campaign for future delivery
via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$schedule_for = '2018-04-01 09:05:21';

$retval = $this->mcapi->campaignSchedule($campaignId, $schedule_for);
if ($this->mcapi->errorCode){
	echo "Unable to Schedule Campaign!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
	echo "Campaign Scheduled to be delivered $schedule_for!\n";
}
?>
