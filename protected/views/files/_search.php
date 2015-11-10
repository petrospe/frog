<?php
/* @var $this FilesController */
/* @var $model Files */
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
		<?php echo $form->label($model,'filename'); ?>
		<?php echo $form->textField($model,'filename',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filename_sys'); ?>
		<?php echo $form->textField($model,'filename_sys',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_type'); ?>
		<?php echo $form->textField($model,'file_type',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_size'); ?>
		<?php echo $form->textField($model,'file_size',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_path'); ?>
		<?php echo $form->textField($model,'file_path',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_category_id'); ?>
		<?php echo $form->textField($model,'file_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_support_id'); ?>
		<?php echo $form->textField($model,'file_support_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_customer_id'); ?>
		<?php echo $form->textField($model,'file_customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modification_date'); ?>
		<?php echo $form->textField($model,'modification_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->