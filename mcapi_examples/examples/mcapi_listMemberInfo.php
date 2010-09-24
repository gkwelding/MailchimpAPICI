<?php
/**
This Example shows how to pull the Info for a Member of a List using the MCAPI codeigniter library 
class and do some basic error checking.
**/
$this->load->library('mcapi');

$retval = $this->mcapi->listMemberInfo( $listId, $my_email );

if ($this->mcapi->errorCode){
	echo "Unable to load listMemberInfo()!\n";
	echo "\tCode=".$this->mcapi->errorCode."\n";
	echo "\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    echo "Member info:\n";
    //below is stupid code specific to what is returned
    //Don't actually do something like this.
    foreach($retval as $k=>$v){
        if (is_array($v)){
            //handle the merges
            foreach($v as $l=>$w){
                echo "\t$l = $w\n";
            }
        } else {
            echo "$k = $v\n";
        }
    }
}
?>
