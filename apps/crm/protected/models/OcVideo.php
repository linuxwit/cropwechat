<?php

/**
 * This is the model class for table "oc_video".
 *
 * The followings are the available columns in table 'oc_video':
 * @property string $CropId
 * @property string $VideoId
 * @property string $VideoPath
 * @property string $VideoTitle
 * @property string $CoverPic
 * @property string $AddTime
 * @property string $AddBy
 * @property string $VideoUrl
 */
class OcVideo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oc_video';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CropId, VideoId, VideoTitle, CoverPic, AddTime, AddBy', 'required'),
			array('CropId, VideoId, CoverPic, AddBy', 'length', 'max'=>36),
			array('VideoPath, VideoUrl', 'length', 'max'=>100),
			array('VideoTitle', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CropId, VideoId, VideoPath, VideoTitle, CoverPic, AddTime, AddBy, VideoUrl', 'safe', 'on'=>'search'),
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
			'VideoId' => 'Video',
			'VideoPath' => 'Video Path',
			'VideoTitle' => 'Video Title',
			'CoverPic' => 'Cover Pic',
			'AddTime' => 'Add Time',
			'AddBy' => 'Add By',
			'VideoUrl' => 'Video Url',
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
		$criteria->compare('VideoId',$this->VideoId,true);
		$criteria->compare('VideoPath',$this->VideoPath,true);
		$criteria->compare('VideoTitle',$this->VideoTitle,true);
		$criteria->compare('CoverPic',$this->CoverPic,true);
		$criteria->compare('AddTime',$this->AddTime,true);
		$criteria->compare('AddBy',$this->AddBy,true);
		$criteria->compare('VideoUrl',$this->VideoUrl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OcVideo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
