<?php

class Comment extends CActiveRecord
{

	public $name;
	public $email;
	public $text;

    public function rules()
    {
        return array(
            array('name, email, text', 'required')
        );
    }
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}