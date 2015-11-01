<?php

/**
 * This is the model class for table "almab_customerrequest".
 *
 * The followings are the available columns in table 'almab_customerrequest':
 * @property integer $id
 * @property string $Request
 * @property string $SerialNumber
 * @property string $Version
 * @property string $Response
 * @property string $RequestTime
 */
class AlmabCustomerrequest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        public $almabcustomerrequest_search;
    
	public function tableName()
	{
		return 'almab_customerrequest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Request, Response', 'length', 'max'=>250),
			array('SerialNumber', 'length', 'max'=>50),
			array('Version', 'length', 'max'=>20),
			array('RequestTime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Request, SerialNumber, Version, Response, RequestTime, almabcustomerrequest_search', 'safe', 'on'=>'search'),
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
                    'almabcustomerrequest' => array(self::BELONGS_TO, 'AlmabCustomers', 'SerialNumber'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Request' => 'Request',
			'SerialNumber' => 'Serial Number',
			'Version' => 'Version',
			'Response' => 'Response',
			'RequestTime' => 'Request Time',
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
                $criteria->with = array('almabcustomerrequest'); // eager load related records
                
		$criteria->compare('id',$this->id);
		$criteria->compare('Request',$this->Request,true);
		$criteria->compare('SerialNumber',$this->SerialNumber,true);
		$criteria->compare('Version',$this->Version,true);
		$criteria->compare('Response',$this->Response,true);
		$criteria->compare('RequestTime',$this->RequestTime,true);
                $criteria->compare('almabcustomerrequest.descr', $this->almabcustomerrequest_search, true ); // related field

                $sort = new CSort();
		$sort->attributes = array(			
				'almabcustomerrequest.descr' => // sort rules for almabcustomers.descr
					array(
						'asc'  => 'almabcustomerrequest.descr',
						'desc' => 'almabcustomerrequest.descr DESC',
					),
                                '*', // add other columns
			);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort' => $sort,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AlmabCustomerrequest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
