<?php
/* @var $this AlmabUpdatesController */
/* @var $model AlmabUpdates */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file'); ?>
		<?php echo $form->textField($model,'file',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'version'); ?>
		<?php echo $form->textField($model,'version',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'upddate'); ?>
		<?php echo $form->textField($model,'upddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requires'); ?>
		<?php echo $form->textField($model,'requires',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CustomerId'); ?>
		<?php echo $form->textField($model,'CustomerId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->