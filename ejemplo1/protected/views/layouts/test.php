<?php /* @var $this Controller */ ?>
<!doctype html> 
<html lang="en"> 
	<head>
		<meta charset="utf-8"> 
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<!--[if lt IE 9]>
		<script src="js/html5.js"></script> 
		<![endif]-->

		￼<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css">
	</head>
	<body>
		<?php echo $content; ?>
	</body>
</html>