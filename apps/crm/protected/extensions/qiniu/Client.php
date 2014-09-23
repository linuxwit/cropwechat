<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of uploader
 *
 * @author witwave
 */
require_once("rs.php");
require_once("fop.php");
require_once("io.php");

class Client extends CApplicationComponent {

    public $accessKey = '<YOUR_APP_ACCESS_KEY>';
    public $secretKey = '<YOUR_APP_SECRET_KEY>';
    public $bucket = "<YOUR_QINIU_BLCKET>";
    private $_client = null;

    public function init() {
        parent::init();
        Qiniu_SetKeys($this->accessKey, $this->secretKey);
        $this->_client = new Qiniu_MacHttpClient(null);
    }

    public function view($key) {
        list($ret, $err) = Qiniu_RS_Stat($this->_client, $this->bucket, $key);
        if ($err !== null) {
            return $err;
        } else {
            return $ret;
        }
    }

    public function copy($key1, $key2) {
        $err = Qiniu_RS_Copy($this->_client, $this->bucket, $key1, $this->bucket, $key2);
        if ($err !== null) {
            return $err;
        } else {
            return $ret;
        }
    }

    public function move($key1, $key2) {
        $err = Qiniu_RS_Move($this->_client, $this->bucket, $key1, $this->bucket, $key2);
        if ($err !== null) {
            return $err;
        } else {
            return $ret;
        }
    }

    public function del($key) {
        $err = Qiniu_RS_Delete($this->_client, $this->bucket, $key);
        if ($err !== null) {
            return $err;
        } else {
            return $ret;
        }
    }

    /**
     * 得到上传凭証
     * @return type
     */
    public function getUploadToken() {
        $putPolicy = new Qiniu_RS_PutPolicy($this->bucket);
        return $putPolicy->Token(null);
    }

    public function uploadText($upToken, $key, $text) {
        list($ret, $err) = Qiniu_Put($upToken, $key, $text, null);
        if ($err !== null) {
            return $err;
        } else {
            return $ret;
        }
    }

    public function uploadFile($upToken, $key, $file) {
        $putExtra = new Qiniu_PutExtra();
        $putExtra->Crc32 = 1;
        list($ret, $err) = Qiniu_PutFile($upToken, $key, $file, $putExtra);
        if ($err !== null) {
            return $err;
        } else {
            return $ret;
        }
    }

}
