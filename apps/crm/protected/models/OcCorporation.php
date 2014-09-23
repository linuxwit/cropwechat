<?php

/**
 * This is the model class for table "oc_corporation".
 *
 * The followings are the available columns in table 'oc_corporation':
 * @property string $CropId
 * @property string $CropCode
 * @property string $CropName
 * @property string $CropDesc
 * @property string $CropOrgCode
 * @property string $CropBizCode
 * @property string $CropWechatKey
 * @property string $CropWechatSecrectKey
 * @property string $AddTime
 * @property string $AddBy
 * @property string $CropMobile
 * @property string $CropTel
 * @property string $ContactName
 */
class OcCorporation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oc_corporation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CropId, CropCode, CropName, AddTime, AddBy, CropMobile, ContactName', 'required'),
			array('CropId', 'length', 'max'=>36),
			array('CropCode', 'length', 'max'=>8),
			array('CropName, CropDesc, CropOrgCode, CropBizCode, AddTime, AddBy, ContactName', 'length', 'max'=>45),
			array('CropWechatKey, CropWechatSecrectKey', 'length', 'max'=>100),
			array('CropMobile, CropTel', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CropId, CropCode, CropName, CropDesc, CropOrgCode, CropBizCode, CropWechatKey, CropWechatSecrectKey, AddTime, AddBy, CropMobile, CropTel, ContactName', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CropId' => 'Crop',
			'CropCode' => 'Crop Code',
			'CropName' => 'Crop Name',
			'CropDesc' => 'Crop Desc',
			'CropOrgCode' => 'Crop Org Code',
			'CropBizCode' => 'Crop Biz Code',
			'CropWechatKey' => 'Crop Wechat Key',
			'CropWechatSecrectKey' => 'Crop Wechat Secrect Key',
			'AddTime' => 'Add Time',
			'AddBy' => 'Add By',
			'CropMobile' => 'Crop Mobile',
			'CropTel' => 'Crop Tel',
			'ContactName' => 'Contact Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('CropId',$this->CropId,true);
		$criteria->compare('CropCode',$this->CropCode,true);
		$criteria->compare('CropName',$this->CropName,true);
		$criteria->compare('CropDesc',$this->CropDesc,true);
		$criteria->compare('CropOrgCode',$this->CropOrgCode,true);
		$criteria->compare('CropBizCode',$this->CropBizCode,true);
		$criteria->compare('CropWechatKey',$this->CropWechatKey,true);
		$criteria->compare('CropWechatSecrectKey',$this->CropWechatSecrectKey,true);
		$criteria->compare('AddTime',$this->AddTime,true);
		$criteria->compare('AddBy',$this->AddBy,true);
		$criteria->compare('CropMobile',$this->CropMobile,true);
		$criteria->compare('CropTel',$this->CropTel,true);
		$criteria->compare('ContactName',$this->ContactName,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OcCorporation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
