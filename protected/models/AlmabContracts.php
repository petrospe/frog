<?php

/**
 * This is the model class for table "almab_contracts".
 *
 * The followings are the available columns in table 'almab_contracts':
 * @property integer $id
 * @property string $CustomerName
 * @property string $CustomerEMail
 * @property string $SerialNumber
 * @property integer $almUsers
 * @property integer $almVersion
 * @property string $ContractStartDate
 * @property string $ContractEndDate
 */
class AlmabContracts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'almab_contracts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('CustomerName, CustomerEMail, SerialNumber, almUsers, almVersion, ContractStartDate, ContractEndDate','required'),
			array('almUsers, almVersion', 'numerical', 'integerOnly'=>true),
			array('CustomerName, CustomerEMail', 'length', 'max'=>250),
			array('SerialNumber', 'length', 'max'=>100),
			array('ContractStartDate, ContractEndDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, CustomerName, CustomerEMail, SerialNumber, almUsers, almVersion, ContractStartDate, ContractEndDate', 'safe', 'on'=>'search'),
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
                    'almabcontractslog' => array(self::HAS_MANY, 'AlmabContractslog', 'ContractId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'CustomerName' => 'Customer Name',
			'CustomerEMail' => 'Customer Email',
			'SerialNumber' => 'Serial Number',
			'almUsers' => 'Alm Users',
			'almVersion' => 'Alm Version',
			'ContractStartDate' => 'Contract Start Date',
			'ContractEndDate' => 'Contract End Date',
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
		$criteria->compare('CustomerName',$this->CustomerName,true);
		$criteria->compare('CustomerEMail',$this->CustomerEMail,true);
		$criteria->compare('SerialNumber',$this->SerialNumber,true);
		$criteria->compare('almUsers',$this->almUsers);
		$criteria->compare('almVersion',$this->almVersion);
		$criteria->compare('ContractStartDate',$this->ContractStartDate,true);
		$criteria->compare('ContractEndDate',$this->ContractEndDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AlmabContracts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
