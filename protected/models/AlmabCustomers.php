<?php

/**
 * This is the model class for table "almab_customers".
 *
 * The followings are the available columns in table 'almab_customers':
 * @property integer $id
 * @property string $descr
 * @property string $email
 * @property string $guid
 * @property string $updatefrom
 * @property string $updateto
 * @property string $dbserial
 */
class AlmabCustomers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'almab_customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('descr, email, guid, updatefrom, updateto, dbserial', 'required'),
			array('descr', 'length', 'max'=>255),
			array('email', 'length', 'max'=>100),
			array('guid, dbserial', 'length', 'max'=>50),
			array('updatefrom, updateto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, descr, email, guid, updatefrom, updateto, dbserial', 'safe', 'on'=>'search'),
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
                    'almabcustomerupdate' => array(self::HAS_MANY, 'AlmabCustomerupdate', 'customerid'),
                    'almabupdates' => array(self::HAS_MANY, 'AlmabUpdates', 'CustomerId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descr' => 'Descr',
			'email' => 'Email',
			'guid' => 'Guid',
			'updatefrom' => 'Updatefrom',
			'updateto' => 'Updateto',
			'dbserial' => 'Dbserial',
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
		$criteria->compare('descr',$this->descr,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('guid',$this->guid,true);
		$criteria->compare('updatefrom',$this->updatefrom,true);
		$criteria->compare('updateto',$this->updateto,true);
		$criteria->compare('dbserial',$this->dbserial,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AlmabCustomers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
