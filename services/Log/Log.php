<?php

namespace Vendor\Lib\Log;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Log {

    private $logger = null;
    private $fileName = '';
    private $logEnable;

    const LOG_PATH = WEB_ROOT . '/logs/';

    /**
     * 
     */
    public function __construct($fileName = 'log', $name = '', $logEnable = 1) {

        if ($this->logger == NULL) {
            $this->logger = new Logger($name);
        }
        $this->fileName = $fileName;
        $this->logEnable = $logEnable;
    }

    /**
     * 
     * @param type $msg
     * @param type $enable
     */
    public function error($msg = '', $context = array(), $enable = 1) {

        if ($this->logEnable && $enable) {
            $streamHandler = new StreamHandler(self::LOG_PATH . $this->fileName, Logger::ERROR);
            $this->logger->pushHandler($streamHandler);
            $this->logger->error($msg, $context);
        }
    }

    /**
     * 
     * @param type $msg
     * @param type $enable
     */
    public function warning($msg = '', $context = array(), $enable = 1) {

        if ($this->logEnable && $enable) {
            $streamHandler = new StreamHandler(self::LOG_PATH . $this->fileName, Logger::WARNING);
            $this->logger->pushHandler($streamHandler);
            $this->logger->warning($msg, $context);
        }
    }

    /**
     * 
     * @param type $msg
     * @param type $enable
     */
    public function info($msg = '', $context = array(), $enable = 1) {

        if ($this->logEnable && $enable) {
            $streamHandler = new StreamHandler(self::LOG_PATH . $this->fileName, Logger::INFO);
            $this->logger->pushHandler($streamHandler);
            $this->logger->info($msg, $context);
        }
    }

}
