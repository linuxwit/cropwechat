<?php
class UploadWidget extends CWidget
{
    
    public $bucket = 'onesale';
    
    private $token;
    
    public function init() {
        $token = Yii::app()->qiniu->getUploadToken();
    }
    
    public function run() {
        $this->render('upload', array('token' => $this->token, 'bucket' => $this->bucket));
    }
}
