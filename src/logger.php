<?php 

namespace SoftKnight\Logger;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

function logger($mensagem, $modo = 'info', $path = null) {
    

    $logPath = $path ?? __DIR__ . '/../logs.txt'; 
    
    $logger = new Logger('softknight_logs');
    
    $logger->pushHandler(new StreamHandler($logPath));

    $levels = [
        'debug', 'info', 'notice', 'warning', 
        'error', 'critical', 'alert', 'emergency'
    ];

    if (in_array(strtolower($modo), $levels)) {
        $logger->$modo($mensagem);
    } else {
        $logger->info($mensagem);
    }
}