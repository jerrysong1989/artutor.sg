<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $mobile
 * @property string $refNumber
 * @property string $type
 * @property string $displayName
 *
 * The followings are the available model relations:
 * @property Skill[] $tblSkills
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('username','email'),
			array('username, password, displayName', 'required'),
			array('username, password, displayName', 'length', 'max'=>50),
			array('mobile', 'match', 'pattern'=>'/[89]{1}[0-9]{7}/'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, mobile, refNumber, type, displayName', 'safe', 'on'=>'search'),
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
			'tblSkills' => array(self::MANY_MANY, 'Skill', 'tbl_user_skill(tutor_id, skill_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username (Email)',
			'password' => 'Password',
			'mobile' => 'Mobile',
			'refNumber' => 'Ref Number',
			'type' => 'Type',
			'displayName' => 'Display Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('refNumber',$this->refNumber,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('displayName',$this->displayName,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


    public function saveWithPasswordHash(){

    }
}