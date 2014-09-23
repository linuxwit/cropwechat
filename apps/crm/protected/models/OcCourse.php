<?php

/**
 * This is the model class for table "oc_course".
 *
 * The followings are the available columns in table 'oc_course':
 * @property string $CropId
 * @property string $CourseId
 * @property string $TeacherId
 * @property string $CourseTitle
 * @property string $StartTime
 * @property string $EndTime
 * @property string $CoverImgId
 * @property integer $MaxPerson
 * @property integer $ProvinceId
 * @property integer $CityId
 * @property string $Address
 * @property double $X
 * @property double $Y
 * @property string $Sumarry
 * @property string $Description
 * @property double $Price
 * @property string $Knowledge
 * @property integer $CourseStatus
 * @property string $AddTime
 * @property integer $AddBy
 */
class OcCourse extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'oc_course';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('CropId, CourseId, CourseTitle, StartTime, EndTime, CoverImgId, MaxPerson, ProvinceId, CityId, Address, AddTime, AddBy', 'required'),
            array('MaxPerson, ProvinceId, CityId, CourseStatus, AddBy', 'numerical', 'integerOnly' => true),
            array('X, Y, Price', 'numerical'),
            array('CropId, CourseId, TeacherId, CoverImgId', 'length', 'max' => 36),
            array('CourseTitle', 'length', 'max' => 100),
            array('Address, Sumarry', 'length', 'max' => 200),
            array('Description, Knowledge', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('CropId, CourseId, TeacherId, CourseTitle, StartTime, EndTime, CoverImgId, MaxPerson, ProvinceId, CityId, Address, X, Y, Sumarry, Description, Price, Knowledge, CourseStatus, AddTime, AddBy', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'CropId' => 'Crop',
            'CourseId' => 'Course',
            'TeacherId' => 'Teacher',
            'CourseTitle' => 'Course Title',
            'StartTime' => 'Start Time',
            'EndTime' => 'End Time',
            'CoverImgId' => 'Cover Img',
            'MaxPerson' => 'Max Person',
            'ProvinceId' => 'Province',
            'CityId' => 'City',
            'Address' => 'Address',
            'X' => 'X',
            'Y' => 'Y',
            'Sumarry' => 'Sumarry',
            'Description' => 'Description',
            'Price' => 'Price',
            'Knowledge' => 'Knowledge',
            'CourseStatus' => 'Course Status',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('CropId', $this->CropId, true);
        $criteria->compare('CourseId', $this->CourseId, true);
        $criteria->compare('TeacherId', $this->TeacherId, true);
        $criteria->compare('CourseTitle', $this->CourseTitle, true);
        $criteria->compare('StartTime', $this->StartTime, true);
        $criteria->compare('EndTime', $this->EndTime, true);
        $criteria->compare('CoverImgId', $this->CoverImgId, true);
        $criteria->compare('MaxPerson', $this->MaxPerson);
        $criteria->compare('ProvinceId', $this->ProvinceId);
        $criteria->compare('CityId', $this->CityId);
        $criteria->compare('Address', $this->Address, true);
        $criteria->compare('X', $this->X);
        $criteria->compare('Y', $this->Y);
        $criteria->compare('Sumarry', $this->Sumarry, true);
        $criteria->compare('Description', $this->Description, true);
        $criteria->compare('Price', $this->Price);
        $criteria->compare('Knowledge', $this->Knowledge, true);
        $criteria->compare('CourseStatus', $this->CourseStatus);
        $criteria->compare('AddTime', $this->AddTime, true);
        $criteria->compare('AddBy', $this->AddBy);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return OcCourse the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
