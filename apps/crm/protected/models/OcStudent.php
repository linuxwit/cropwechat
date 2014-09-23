<?php

/**
 * This is the model class for table "oc_student".
 *
 * The followings are the available columns in table 'oc_student':
 * @property string $CropId
 * @property string $StudentId
 * @property string $RealName
 * @property string $NickName
 * @property string $Sex
 * @property string $Mobile
 * @property string $Tel
 * @property string $Email
 * @property string $Weixin
 * @property string $QQ
 * @property string $Weibo
 * @property string $Tags
 * @property string $Birthday
 * @property string $CropName
 * @property string $JobTitle
 * @property string $Mark
 * @property string $AddTime
 * @property string $AddBy
 */
class OcStudent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oc_student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CropId, StudentId, NickName, Sex, Mobile, Email, JobTitle', 'required'),
			array('CropId, StudentId, AddBy', 'length', 'max'=>36),
			array('RealName, NickName, Weixin, QQ, Weibo, Mark', 'length', 'max'=>45),
			array('Sex', 'length', 'max'=>1),
			array('Mobile, Tel', 'length', 'max'=>16),
			array('Email', 'length', 'max'=>150),
			array('Tags', 'length', 'max'=>500),
			array('CropName', 'length', 'max'=>100),
			array('JobTitle', 'length', 'max'=>200),
			array('Birthday, AddTime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CropId, StudentId, RealName, NickName, Sex, Mobile, Tel, Email, Weixin, QQ, Weibo, Tags, Birthday, CropName, JobTitle, Mark, AddTime, AddBy', 'safe', 'on'=>'search'),
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
			'StudentId' => 'Student',
			'RealName' => 'Real Name',
			'NickName' => 'Nick Name',
			'Sex' => 'Sex',
			'Mobile' => 'Mobile',
			'Tel' => 'Tel',
			'Email' => 'Email',
			'Weixin' => 'Weixin',
			'QQ' => 'Qq',
			'Weibo' => 'Weibo',
			'Tags' => 'Tags',
			'Birthday' => 'Birthday',
			'CropName' => 'Crop Name',
			'JobTitle' => 'Job Title',
			'Mark' => 'Mark',
			'AddTime' => 'Add Time',
			'AddBy' => 'Add By',
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
		$criteria->compare('StudentId',$this->StudentId,true);
		$criteria->compare('RealName',$this->RealName,true);
		$criteria->compare('NickName',$this->NickName,true);
		$criteria->compare('Sex',$this->Sex,true);
		$criteria->compare('Mobile',$this->Mobile,true);
		$criteria->compare('Tel',$this->Tel,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Weixin',$this->Weixin,true);
		$criteria->compare('QQ',$this->QQ,true);
		$criteria->compare('Weibo',$this->Weibo,true);
		$criteria->compare('Tags',$this->Tags,true);
		$criteria->compare('Birthday',$this->Birthday,true);
		$criteria->compare('CropName',$this->CropName,true);
		$criteria->compare('JobTitle',$this->JobTitle,true);
		$criteria->compare('Mark',$this->Mark,true);
		$criteria->compare('AddTime',$this->AddTime,true);
		$criteria->compare('AddBy',$this->AddBy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OcStudent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
