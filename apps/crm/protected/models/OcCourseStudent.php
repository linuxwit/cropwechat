<?php

/**
 * This is the model class for table "oc_course_student".
 *
 * The followings are the available columns in table 'oc_course_student':
 * @property string $CropId
 * @property string $CourseId
 * @property string $StudentId
 * @property string $ChannelCode
 * @property integer $AuditStatus
 * @property string $AuditBy
 * @property integer $SignStatus
 * @property string $SignUrl
 * @property string $SignCount
 * @property string $AddTime
 */
class OcCourseStudent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oc_course_student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CropId, CourseId, StudentId, SignUrl, AddTime', 'required'),
			array('AuditStatus, SignStatus', 'numerical', 'integerOnly'=>true),
			array('CropId, CourseId, StudentId, AuditBy', 'length', 'max'=>36),
			array('ChannelCode, SignCount', 'length', 'max'=>45),
			array('SignUrl', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CropId, CourseId, StudentId, ChannelCode, AuditStatus, AuditBy, SignStatus, SignUrl, SignCount, AddTime', 'safe', 'on'=>'search'),
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
			'CourseId' => 'Course',
			'StudentId' => 'Student',
			'ChannelCode' => 'Channel Code',
			'AuditStatus' => 'Audit Status',
			'AuditBy' => 'Audit By',
			'SignStatus' => 'Sign Status',
			'SignUrl' => 'Sign Url',
			'SignCount' => 'Sign Count',
			'AddTime' => 'Add Time',
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
		$criteria->compare('CourseId',$this->CourseId,true);
		$criteria->compare('StudentId',$this->StudentId,true);
		$criteria->compare('ChannelCode',$this->ChannelCode,true);
		$criteria->compare('AuditStatus',$this->AuditStatus);
		$criteria->compare('AuditBy',$this->AuditBy,true);
		$criteria->compare('SignStatus',$this->SignStatus);
		$criteria->compare('SignUrl',$this->SignUrl,true);
		$criteria->compare('SignCount',$this->SignCount,true);
		$criteria->compare('AddTime',$this->AddTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OcCourseStudent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
