<?php

class ArticleComment extends CActiveRecord
{

	public $article_id;
	public $comment_id;
	public $comment_parent_id=0;

    public function rules()
    {
        return array(
            array('article_id, comment_id', 'required')
        );
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}