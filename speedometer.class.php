<?php
include_once 'exceptions.speedometer.class.php';

class SpeedoMeter {
	private $startMicroTime=0;
	private $stopMicroTime=0;
	private $stopping_ms=false;
	
	public function start() {
		if(!$this->stopping_ms) {
			$this->startMicroTime=microtime(true);	
			$this->stopping_ms=true;		
		} else {
			throw new NotStopptException('Already stopping time. Please stop first.');
		}

	}
	
	public function stop() {
		if($this->stopping_ms) {
			$this->stopMicroTime=microtime(true);
			$this->stopping_ms=false;			
		} else {
			throw new NotStartedException('Start time not set. Please start first.');
		}
	}
	
	public function getDiff(){
		return ($this->stopMicroTime-$this->startMicroTime);
	}
	
}
?>