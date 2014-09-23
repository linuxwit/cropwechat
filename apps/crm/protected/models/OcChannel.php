<?php

/**
 * This is the model class for table "oc_channel".
 *
 * The followings are the available columns in table 'oc_channel':
 * @property string $CropId
 * @property string $ChannelId
 * @property string $ChannelCode
 * @property string $ChannelName
 * @property string $SourceUrl
 * @property string $ShortUrl
 * @property integer $UV
 * @property integer $PV
 * @property string $AddBy
 * @property string $AddTime
 * @property string $LastUpdateTime
 */
class OcChannel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oc_channel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CropId, ChannelId, ChannelCode, ChannelName, SourceUrl, ShortUrl, AddBy, AddTime, LastUpdateTime', 'required'),
			array('UV, PV', 'numerical', 'integerOnly'=>true),
			array('CropId, ChannelId, AddBy', 'length', 'max'=>36),
			array('ChannelCode', 'length', 'max'=>45),
			array('ChannelName, ShortUrl', 'length', 'max'=>100),
			array('SourceUrl', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CropId, ChannelId, ChannelCode, ChannelName, SourceUrl, ShortUrl, UV, PV, AddBy, AddTime, LastUpdateTime', 'safe', 'on'=>'search'),
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
			'ChannelId' => 'Channel',
			'ChannelCode' => 'Channel Code',
			'ChannelName' => 'Channel Name',
			'SourceUrl' => 'Source Url',
			'ShortUrl' => 'Short Url',
			'UV' => 'Uv',
			'PV' => 'Pv',
			'AddBy' => 'Add By',
			'AddTime' => 'Add Time',
			'LastUpdateTime' => 'Last Update Time',
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
		$criteria->compare('ChannelId',$this->ChannelId,true);
		$criteria->compare('ChannelCode',$this->ChannelCode,true);
		$criteria->compare('ChannelName',$this->ChannelName,true);
		$criteria->compare('SourceUrl',$this->SourceUrl,true);
		$criteria->compare('ShortUrl',$this->ShortUrl,true);
		$criteria->compare('UV',$this->UV);
		$criteria->compare('PV',$this->PV);
		$criteria->compare('AddBy',$this->AddBy,true);
		$criteria->compare('AddTime',$this->AddTime,true);
		$criteria->compare('LastUpdateTime',$this->LastUpdateTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OcChannel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
