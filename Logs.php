<?php 
require __DIR__.'/vendor/autoload.php';
use \Monolog\Logger;
use \Monolog\Handler\StreamHandler;
use \Monolog\Handler\FirePHPHandler;

trait Logs
{
     public $log;

     public function logDebug(String $mensaje)
     {
         $log = new Logger('GeneratorLogs');
         $fileDebug = __DIR__.DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR.'debug_'.date('Y-m-d').'.log';
         $log->pushHandler(new StreamHandler($fileDebug, Logger::DEBUG));
         $log->pushHandler(new FirePHPHandler());
         $log->debug($mensaje);
     }

     public function logError(String $mensaje)
     {
         $log = new Logger('GeneratorLogs');
         $fileError = __DIR__.DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR.'error_'.date('Y-m-d').'.log';
         $log->pushHandler(new StreamHandler($fileError, Logger::ERROR));
        
         $log->adderror($mensaje);
     }

    public function logInfo(String $mensaje)
    {
        $log = new Logger('GeneratorLogs');
        $fileInfo =__DIR__.DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR.'info_'.date('Y-m-d').'.log';
        $log->pushHandler(new StreamHandler($fileInfo, Logger::INFO));
        $log->pushHandler(new FirePHPHandler());
        $log->info($mensaje);
    }

}

?>