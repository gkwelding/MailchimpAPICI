<?php
$this->load->library('mcapi');

$history = $this->mcapi->listGrowthHistory($listId);

if ($this->mcapi->errorCode){
	echo "Unable to run listGrowthHistory()!\n\tCode=".$this->mcapi->errorCode."\n\tMsg=".$this->mcapi->errorMessage."\n";
} else {
    foreach($history as $h){
        echo $h['month']."\n";
        echo "\tExisting=".$h['existing']."\n";
        echo "\tImports=".$h['imports']."\n";
        echo "\tOptins=".$h['optins']."\n";
    }
}
?> 
