<?php

/**
 * This is the model class for table "almab_customerupdate".
 *
 * The followings are the available columns in table 'almab_customerupdate':
 * @property integer $id
 * @property integer $customerid
 * @property integer $updateid
 * @property string $condate
 * @property string $action
 */
class AlmabCustomerupdate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'almab_customerupdate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customerid, updateid', 'numerical', 'integerOnly'=>true),
			array('action', 'length', 'max'=>20),
			array('condate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customerid, updateid, condate, action', 'safe', 'on'=>'search'),
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
                    'almabcustomers' => array(self::BELONGS_TO, 'AlmabCustomers', 'customerid'),
                    'almabupdates' => array(self::BELONGS_TO, 'AlmabUpdates', 'updateid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'customerid' => 'Customerid',
			'updateid' => 'Updateid',
			'condate' => 'Condate',
			'action' => 'Action',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('customerid',$this->customerid);
		$criteria->compare('updateid',$this->updateid);
		$criteria->compare('condate',$this->condate,true);
		$criteria->compare('action',$this->action,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AlmabCustomerupdate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
