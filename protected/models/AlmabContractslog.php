<?php

/**
 * This is the model class for table "almab_contractslog".
 *
 * The followings are the available columns in table 'almab_contractslog':
 * @property integer $id
 * @property integer $ContractId
 * @property string $DateOfUse
 * @property string $MacAddress
 * @property string $ComputerName
 * @property string $UserName
 * @property integer $AccessGranted
 */
class AlmabContractslog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'almab_contractslog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ContractId, AccessGranted', 'numerical', 'integerOnly'=>true),
			array('MacAddress, ComputerName, UserName', 'length', 'max'=>200),
			array('DateOfUse', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ContractId, DateOfUse, MacAddress, ComputerName, UserName, AccessGranted', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'ContractId' => 'Contract',
			'DateOfUse' => 'Date Of Use',
			'MacAddress' => 'Mac Address',
			'ComputerName' => 'Computer Name',
			'UserName' => 'User Name',
			'AccessGranted' => 'Access Granted',
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
		$criteria->compare('ContractId',$this->ContractId);
		$criteria->compare('DateOfUse',$this->DateOfUse,true);
		$criteria->compare('MacAddress',$this->MacAddress,true);
		$criteria->compare('ComputerName',$this->ComputerName,true);
		$criteria->compare('UserName',$this->UserName,true);
		$criteria->compare('AccessGranted',$this->AccessGranted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AlmabContractslog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
