<?php
/**
This Example shows how to pull a list of your Campaign Folders via the MCAPI codeigniter library.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->campaignFolders();

if ($this->mcapi->errorCode){
	echo "Unable to Pull List of Folders or You have not created any!";
	echo "\n\tCode=".$this->mcapi->errorCode;
	echo "\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    if (sizeof($retval)==0){
        echo "No Folders found!\n";
    } else {
	    echo "Your Folders:\n";
		
        foreach($retval as $folder){
            echo $folder['folder_id'].' => '.$folder['name']."\n";
        }
    }
}
?>
