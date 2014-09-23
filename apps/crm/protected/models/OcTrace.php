<?php

/**
 * This is the model class for table "oc_trace".
 *
 * The followings are the available columns in table 'oc_trace':
 * @property string $CropId
 * @property string $TraceId
 * @property string $TraceType
 * @property string $StudentId
 * @property string $CourseId
 * @property string $Remark
 * @property string $TraceTime
 */
class OcTrace extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oc_trace';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CropId, TraceId, TraceType, StudentId, CourseId, TraceTime', 'required'),
			array('CropId, TraceId, TraceType, StudentId, CourseId', 'length', 'max'=>36),
			array('Remark', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CropId, TraceId, TraceType, StudentId, CourseId, Remark, TraceTime', 'safe', 'on'=>'search'),
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
			'TraceId' => 'Trace',
			'TraceType' => 'Trace Type',
			'StudentId' => 'Student',
			'CourseId' => 'Course',
			'Remark' => 'Remark',
			'TraceTime' => 'Trace Time',
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
		$criteria->compare('TraceId',$this->TraceId,true);
		$criteria->compare('TraceType',$this->TraceType,true);
		$criteria->compare('StudentId',$this->StudentId,true);
		$criteria->compare('CourseId',$this->CourseId,true);
		$criteria->compare('Remark',$this->Remark,true);
		$criteria->compare('TraceTime',$this->TraceTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OcTrace the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
