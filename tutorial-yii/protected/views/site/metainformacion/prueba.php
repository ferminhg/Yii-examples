<?php

//titulo
$this->pageTitle =$metas['title'];
//Descripcion
Yii::app()->clientScript->registerMetaTag($metas['description'], 'description');

//Keywords
Yii::app()->clientScript->registerMetaTag($metas['keywords'], 'keywords');

//Robots
Yii::app()->clientScript->registerMetaTag($metas['robots'], 'robots');

//Archivo JS 
Yii::app()->clientScript->registerScriptFile
		(
			Yii::app()->request->baseUrl."/assets/a832bbc8/punycode.js",
			CClientScript::POS_END
		);

//Archivo CSS
Yii::app()->clientScript->registerCssFile
		(
			Yii::app()->request->baseUrl."/css/screen.css"
		);