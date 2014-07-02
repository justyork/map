<?php

/**
 * This is the model class for table "points".
 *
 * The followings are the available columns in table 'points':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $category
 * @property string $image
 * @property string $date_start
 * @property string $date_end
 * @property integer $no_end
 * @property integer $company_id
 * @property integer $user_id
 * @property string $user_email
 * @property string $address
 * @property string $lat
 * @property string $lng
 * @property integer $status
 * @property integer $vip
 * @property string $date
 */
class Points extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'points';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, category, image, date_start, date_end, no_end, company_id, user_id, user_email, address, lat, lng, status, vip, date', 'required'),
			array('category, no_end, company_id, user_id, status, vip', 'numerical', 'integerOnly'=>true),
			array('name, image, address', 'length', 'max'=>255),
			array('date_start, date_end, lat, lng, date', 'length', 'max'=>15),
			array('user_email', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, category, image, date_start, date_end, no_end, company_id, user_id, user_email, address, lat, lng, status, vip, date', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'description' => 'Description',
			'category' => 'Category',
			'image' => 'Image',
			'date_start' => 'Date Start',
			'date_end' => 'Date End',
			'no_end' => 'No End',
			'company_id' => 'Company',
			'user_id' => 'User',
			'user_email' => 'User Email',
			'address' => 'Address',
			'lat' => 'Lat',
			'lng' => 'Lng',
			'status' => 'Status',
			'vip' => 'Vip',
			'date' => 'Date',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('category',$this->category);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('no_end',$this->no_end);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lng',$this->lng,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('vip',$this->vip);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Actions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
