<?php

/**
 * This is the model class for table "almab_updates".
 *
 * The followings are the available columns in table 'almab_updates':
 * @property integer $id
 * @property string $file
 * @property string $version
 * @property string $upddate
 * @property string $requires
 * @property integer $CustomerId
 */
class AlmabUpdates extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'almab_updates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('file_name, file_type, version, upddate, requires','required'),
                        array('file_type', 'length', 'max'=>30, 'on'=>'insert,update'),
			array('file_size', 'length', 'max'=>11, 'on'=>'insert,update'),
			array('file_path', 'length', 'max'=>250, 'on'=>'insert,update'),
                        array('file_name', 'length', 'max'=>255, 'on'=>'insert,update'),
                        array('upddate','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'insert,update'),
                        array('file_name', 'file', 'types'=>'msi, exe, zip', 'allowEmpty'=>true, 'on'=>'update'),
			array('CustomerId', 'numerical', 'integerOnly'=>true),
			array('version, requires', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, file_name, version, upddate, requires, CustomerId, file_type, file_size, file_path', 'safe', 'on'=>'search'),
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
                    'almabcustomerupdate' => array(self::HAS_MANY, 'AlmabCustomerupdate', 'updateid'),
                    'almabcustomers' => array(self::BELONGS_TO, 'AlmabCustomers', 'CustomerId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'file_name' => 'File',
			'version' => 'Version',
			'upddate' => 'Upddate',
			'requires' => 'Requires',
			'CustomerId' => 'Customer',
                        'file_type' => 'Type',
                        'file_size' => 'Size',
                        'file_path' => 'Path',
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
		$criteria->compare('file_name',$this->file_name,true);
		$criteria->compare('version',$this->version,true);
		$criteria->compare('upddate',$this->upddate,true);
		$criteria->compare('requires',$this->requires,true);
		$criteria->compare('CustomerId',$this->CustomerId);
                $criteria->compare('file_type',$this->file_type,true);
                $criteria->compare('file_size',$this->file_size,true);
                $criteria->compare('file_path',$this->file_path,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                        'defaultOrder'=>'id DESC',
                         ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AlmabUpdates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        /* Update Modified, Created dates */
	public function beforeSave() 
        {
	        $this->upddate = new CDbExpression('NOW()');
	 
	    return parent::beforeSave();
	}
}
