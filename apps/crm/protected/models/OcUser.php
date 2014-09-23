<?php

/**
 * This is the model class for table "oc_user".
 *
 * The followings are the available columns in table 'oc_user':
 * @property string $CropId
 * @property string $UserId
 * @property string $NickName
 * @property string $RealName
 * @property string $Mobile
 * @property string $Email
 * @property string $Password
 * @property string $Salt
 * @property string $AddTime
 * @property integer $LoginCount
 * @property integer $Status
 */
class OcUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oc_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CropId, UserId, NickName, Mobile, Email, Password, Salt, AddTime', 'required'),
			array('LoginCount, Status', 'numerical', 'integerOnly'=>true),
			array('CropId, UserId', 'length', 'max'=>36),
			array('NickName, RealName, Salt, AddTime', 'length', 'max'=>45),
			array('Mobile', 'length', 'max'=>16),
			array('Email', 'length', 'max'=>100),
			array('Password', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CropId, UserId, NickName, RealName, Mobile, Email, Password, Salt, AddTime, LoginCount, Status', 'safe', 'on'=>'search'),
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
			'UserId' => 'User',
			'NickName' => 'Nick Name',
			'RealName' => 'Real Name',
			'Mobile' => 'Mobile',
			'Email' => 'Email',
			'Password' => 'Password',
			'Salt' => 'Salt',
			'AddTime' => 'Add Time',
			'LoginCount' => 'Login Count',
			'Status' => 'Status',
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
		$criteria->compare('UserId',$this->UserId,true);
		$criteria->compare('NickName',$this->NickName,true);
		$criteria->compare('RealName',$this->RealName,true);
		$criteria->compare('Mobile',$this->Mobile,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Salt',$this->Salt,true);
		$criteria->compare('AddTime',$this->AddTime,true);
		$criteria->compare('LoginCount',$this->LoginCount);
		$criteria->compare('Status',$this->Status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OcUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
