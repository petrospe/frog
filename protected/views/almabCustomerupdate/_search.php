<?php
/* @var $this AlmabCustomerupdateController */
/* @var $model AlmabCustomerupdate */
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
		<?php echo $form->label($model,'customerid'); ?>
		<?php echo $form->textField($model,'customerid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateid'); ?>
		<?php echo $form->textField($model,'updateid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condate'); ?>
		<?php echo $form->textField($model,'condate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'action'); ?>
		<?php echo $form->textField($model,'action',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->