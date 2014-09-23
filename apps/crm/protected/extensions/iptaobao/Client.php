<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author witwave
 */
class Client extends CApplicationComponent {

    public $server = 'http://ip.taobao.com/service/getIpInfo.php';

    public function getIpInfo($ip) {
        $url = $this->server . '?' . http_build_query(array('ip' => $ip));
        $json = file_get_contents($url);

        if (!$json) {
            return false;
        }
        return CJSON::decode($json);
    }

}
