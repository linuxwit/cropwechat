<?php

/**
 * This is the model class for table "oc_teacher".
 *
 * The followings are the available columns in table 'oc_teacher':
 * @property string $CropId
 * @property string $TeacherId
 * @property string $AvatarId
 * @property string $NickName
 * @property string $RealName
 * @property string $Sex
 * @property string $LiveLocation
 * @property string $TeacherInfo
 * @property string $TeacherSummary
 * @property string $TeachDesc
 * @property string $AddTime
 * @property string $AddBy
 */
class OcTeacher extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oc_teacher';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CropId, TeacherId, AvatarId, NickName, RealName, Sex, LiveLocation, TeacherInfo, TeacherSummary, AddTime', 'required'),
			array('CropId, TeacherId, AvatarId, AddBy', 'length', 'max'=>36),
			array('NickName, RealName', 'length', 'max'=>45),
			array('Sex', 'length', 'max'=>1),
			array('LiveLocation, TeacherInfo, TeacherSummary', 'length', 'max'=>200),
			array('TeachDesc', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CropId, TeacherId, AvatarId, NickName, RealName, Sex, LiveLocation, TeacherInfo, TeacherSummary, TeachDesc, AddTime, AddBy', 'safe', 'on'=>'search'),
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
			'TeacherId' => 'Teacher',
			'AvatarId' => 'Avatar',
			'NickName' => 'Nick Name',
			'RealName' => 'Real Name',
			'Sex' => 'Sex',
			'LiveLocation' => 'Live Location',
			'TeacherInfo' => 'Teacher Info',
			'TeacherSummary' => 'Teacher Summary',
			'TeachDesc' => 'Teach Desc',
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
		$criteria->compare('TeacherId',$this->TeacherId,true);
		$criteria->compare('AvatarId',$this->AvatarId,true);
		$criteria->compare('NickName',$this->NickName,true);
		$criteria->compare('RealName',$this->RealName,true);
		$criteria->compare('Sex',$this->Sex,true);
		$criteria->compare('LiveLocation',$this->LiveLocation,true);
		$criteria->compare('TeacherInfo',$this->TeacherInfo,true);
		$criteria->compare('TeacherSummary',$this->TeacherSummary,true);
		$criteria->compare('TeachDesc',$this->TeachDesc,true);
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
	 * @return OcTeacher the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
