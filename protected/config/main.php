<?php

return array(
	'name'=>'blog',
	'defaultController'=>'articles',

    'import'=>array(
        'application.models.*',
        'application.components.*',
    ),
	'components'=>array(
		'urlManager'=>array(
//			'urlFormat'=>'path',
//			'rules'=>array(
//				'game/guess/<g:\w>'=>'game/guess',
//			),
		),
        'db'=>array('connectionString'=> "mysql:host=localhost;dbname=test;Username=root;Password=52856321")
	),
);