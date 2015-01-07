<?php 
/* @var $this SiteController */

?>

<div class='form'>
	<?php
		$form = $this->beginWidget('CActiveForm', array
			(
				'method' => 'POST',
				'action' => Yii::app()->createUrl('site/registro'),
				'enableClientValidation' => true,
				'clientOptions' => array(
						'validateOnSubmit' => true,
						'validateOnChange' => true,
						'validateOnType' => true,
					),	
			));
	?>

		<div class='row'>
			<?php 
				echo $form->labelEx($model, 'nombre');
				echo $form->textField($model, 'nombre');
				echo $form->error($model, 'nombre');
			?>
		</div>

		<div class='row'>
			<?php echo CHtml::submitButton('Registrarme'); ?>
		</div>


	<?php $this->endWidget(); ?>
</div>