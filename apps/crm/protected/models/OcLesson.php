<?php

/**
 * This is the model class for table "oc_lesson".
 *
 * The followings are the available columns in table 'oc_lesson':
 * @property string $CopId
 * @property string $CourseId
 * @property string $LessonId
 * @property string $LessonTitle
 * @property string $LessonSummary
 * @property string $LessonDesc
 * @property string $VideoId
 * @property string $AddTime
 * @property string $AddBy
 */
class OcLesson extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oc_lesson';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CopId, CourseId, LessonId, LessonTitle, LessonSummary, AddTime, AddBy', 'required'),
			array('CopId, CourseId, VideoId, AddBy', 'length', 'max'=>36),
			array('LessonId', 'length', 'max'=>45),
			array('LessonTitle', 'length', 'max'=>100),
			array('LessonSummary', 'length', 'max'=>200),
			array('LessonDesc', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CopId, CourseId, LessonId, LessonTitle, LessonSummary, LessonDesc, VideoId, AddTime, AddBy', 'safe', 'on'=>'search'),
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
			'CopId' => 'Cop',
			'CourseId' => 'Course',
			'LessonId' => 'Lesson',
			'LessonTitle' => 'Lesson Title',
			'LessonSummary' => 'Lesson Summary',
			'LessonDesc' => 'Lesson Desc',
			'VideoId' => 'Video',
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

		$criteria->compare('CopId',$this->CopId,true);
		$criteria->compare('CourseId',$this->CourseId,true);
		$criteria->compare('LessonId',$this->LessonId,true);
		$criteria->compare('LessonTitle',$this->LessonTitle,true);
		$criteria->compare('LessonSummary',$this->LessonSummary,true);
		$criteria->compare('LessonDesc',$this->LessonDesc,true);
		$criteria->compare('VideoId',$this->VideoId,true);
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
	 * @return OcLesson the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
