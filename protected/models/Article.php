<?php

/**
 * This is the model class for table "{{article}}".
 *
 * The followings are the available columns in table '{{article}}':
 * @property integer $aid
 * @property integer $cid
 * @property integer $uid
 * @property string $title
 * @property string $content
 * @property string $dateline
 * @property integer $isshow
 * @property integer $readnum
 *
 * The followings are the available model relations:
 * @property Catalog $c
 * @property User $u
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
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
		return '{{article}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cid, uid, title, content', 'required'),
			array('cid, uid, isshow, readnum', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>1024),
			array('dateline', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('aid, cid, uid, title, content, dateline, isshow, readnum', 'safe', 'on'=>'search'),
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
			'catalog' => array(self::BELONGS_TO, 'Catalog', 'cid'),
			'author' => array(self::BELONGS_TO, 'User', 'uid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'aid' => 'Aid',
			'cid' => 'Cid',
			'uid' => 'Uid',
			'title' => 'Title',
			'content' => 'Content',
			'dateline' => 'Dateline',
			'isshow' => 'Isshow',
			'readnum' => 'Readnum',
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

		$criteria->compare('aid',$this->aid);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('dateline',$this->dateline,true);
		$criteria->compare('isshow',$this->isshow);
		$criteria->compare('readnum',$this->readnum);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}