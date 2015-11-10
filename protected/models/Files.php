<?php

/**
 * This is the model class for table "files".
 *
 * The followings are the available columns in table 'files':
 * @property integer $id
 * @property string $filename
 * @property string $filename_sys
 * @property string $file_type
 * @property string $file_size
 * @property string $file_path
 * @property integer $file_category_id
 * @property string $create_date
 * @property string $modification_date
 */
class Files extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'files';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('filename_sys, file_type, file_category_id', 'required'),
			array('file_category_id', 'numerical', 'integerOnly'=>true),
			array('filename', 'length', 'max'=>80),
			array('filename_sys', 'length', 'max'=>255),
			array('file_type', 'length', 'max'=>30),
			array('file_size', 'length', 'max'=>11),
			array('file_path', 'length', 'max'=>250),
			array('create_date, modification_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, filename, filename_sys, file_type, file_size, file_path, file_category_id, file_support_id, file_customer_id,create_date, modification_date', 'safe', 'on'=>'search'),
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
			'filename' => 'Filename',
			'filename_sys' => 'Filename Sys',
			'file_type' => 'File Type',
			'file_size' => 'File Size',
			'file_path' => 'File Path',
			'file_category_id' => 'File Category',
                        'file_support_id' => 'Support',
                        'file_customer_id' => 'Customer',
			'create_date' => 'Create Date',
			'modification_date' => 'Modification Date',
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
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('filename_sys',$this->filename_sys,true);
		$criteria->compare('file_type',$this->file_type,true);
		$criteria->compare('file_size',$this->file_size,true);
		$criteria->compare('file_path',$this->file_path,true);
		$criteria->compare('file_category_id',$this->file_category_id,true);
                $criteria->compare('file_category_id',$this->file_support_id,true);
                $criteria->compare('file_category_id',$this->file_customer_id,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('modification_date',$this->modification_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Files the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
