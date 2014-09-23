<?php
class UploadWidget extends CWidget
{

    private $token;

    public $bucket='onesale';

    public function init() {
        $token=Yii::app()->qiniu->getUploadToken();
    }
    
    public function run() {
        $this->render('upload', array('token' => $this->token,'bucket'=>$this->bucket));
    }
}
