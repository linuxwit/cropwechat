<?php

/**
 * This is the model class for table "oc_page_view_log".
 *
 * The followings are the available columns in table 'oc_page_view_log':
 * @property integer $Id
 * @property string $ChannelCode
 * @property string $FromUrl
 * @property string $FromIP
 * @property string $ClientAgent
 * @property string $ViewTime
 */
class OcPageViewLog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oc_page_view_log';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ChannelCode, FromUrl, FromIP, ClientAgent, ViewTime', 'required'),
			array('ChannelCode', 'length', 'max'=>8),
			array('FromUrl', 'length', 'max'=>100),
			array('FromIP', 'length', 'max'=>16),
			array('ClientAgent', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, ChannelCode, FromUrl, FromIP, ClientAgent, ViewTime', 'safe', 'on'=>'search'),
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
			'Id' => 'ID',
			'ChannelCode' => 'Channel Code',
			'FromUrl' => 'From Url',
			'FromIP' => 'From Ip',
			'ClientAgent' => 'Client Agent',
			'ViewTime' => 'View Time',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('ChannelCode',$this->ChannelCode,true);
		$criteria->compare('FromUrl',$this->FromUrl,true);
		$criteria->compare('FromIP',$this->FromIP,true);
		$criteria->compare('ClientAgent',$this->ClientAgent,true);
		$criteria->compare('ViewTime',$this->ViewTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OcPageViewLog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
