<?php

/**
 * This is the model class for table "dp3_article_comments".
 *
 * The followings are the available columns in table 'dp3_article_comments':
 * @property integer $iddp3_article_comments
 * @property string $comments
 * @property integer $iddp3_article
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 *
 * The followings are the available model relations:
 * @property Article $iddp3Article
 */
class ArticleComments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dp3_article_comments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iddp3_article, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('comments, created_date, modified_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('iddp3_article_comments, comments, iddp3_article, created_date, created_by, modified_date, modified_by', 'safe', 'on'=>'search'),
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
			'iddp3Article' => array(self::BELONGS_TO, 'Article', 'iddp3_article'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddp3_article_comments' => 'Iddp3 Article Comments',
			'comments' => 'Comments',
			'iddp3_article' => 'Iddp3 Article',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
			'modified_date' => 'Modified Date',
			'modified_by' => 'Modified By',
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

		$criteria->compare('iddp3_article_comments',$this->iddp3_article_comments);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('iddp3_article',$this->iddp3_article);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('modified_date',$this->modified_date,true);
		$criteria->compare('modified_by',$this->modified_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArticleComments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
