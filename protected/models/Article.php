<?php

class Article extends CActiveRecord
{

	public $theme;
	public $text;

    public function rules()
    {
        return array(
            array('theme, text', 'required')
        );
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}
