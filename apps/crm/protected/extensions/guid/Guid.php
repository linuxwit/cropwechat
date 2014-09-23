<?php

class Guid extends CComponent {

    public $host_name = 'localhost';
    public $host_ip = '127.0.0.1';
    private $valueBeforeMD5;
    private $valueAfterMD5;

    public function init() {
        
    }

    public function guid() {
        $this->getGuid($this->host_name, $this->host_ip);
        $raw = strtoupper($this->valueAfterMD5);
        return substr($raw, 0, 8) . '-' . substr($raw, 8, 4) . '-' . substr($raw, 12, 4) . '-' . substr($raw, 16, 4) . '-' . substr($raw, 20);
    }

    private function getGuid($name, $ip) {
        $address = $this->getHost($name, $ip);
        $this->valueBeforeMD5 = $address . ':' . $this->currentTimeMillis() . ':' . $this->nextLong();
        $this->valueAfterMD5 = md5($this->valueBeforeMD5);
    }

    private function getHost($coumputer_name = null, $ip = null) {
        return strtolower($coumputer_name . '/' . $ip);
    }

    private function currentTimeMillis() {
        list($usec, $sec) = explode(" ", microtime());
        return $sec . substr($usec, 2, 3);
    }

    private function nextLong() {
        $tmp = rand(0, 1) ? '-' : '';
        return $tmp . rand(1000, 9999) . rand(1000, 9999) . rand(1000, 9999) . rand(100, 999) . rand(100, 999);
    }

}
