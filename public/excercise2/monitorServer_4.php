<?php
class monitorServerPerformance{
	public function monitorServer(){
		echo "Monitor Server Performance ".PHP_EOL;
		$this->observePerformance();
		echo "FInd Processes consumes more load on server ".PHP_EOL;
		$this->processConsumesMoreLoad();
	}

	public function observePerformance(){
		echo shell_exec("top -n 1");
	}
	public function processConsumesMoreLoad(){
		echo shell_exec('ps -eo pid,ppid,cmd,%mem,%cpu --sort=-%mem | head');
	}
}

$obj = new monitorServerPerformance();
$obj->monitorServer();

// Run below command to execute this script
// cd /var/www/html/router_app/public/excercise2
// php monitorServer_4.php

?>