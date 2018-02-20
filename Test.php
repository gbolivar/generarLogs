<?php 
include('Logs.php');

class Test{
	use Logs;
	public function init()
	{
			$this->logDebug('Hola');
			$this->logError('Hola');
			$this->logInfo('Hola');
	}
}
$test = new Test();
$test->init();
?>