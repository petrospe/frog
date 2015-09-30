<?php
/* @var $this AlmabCustomerrequestController */
/* @var $model AlmabCustomerrequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'almab-customerrequest-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Request'); ?>
		<?php echo $form->textField($model,'Request',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'Request'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SerialNumber'); ?>
		<?php echo $form->textField($model,'SerialNumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'SerialNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Version'); ?>
		<?php echo $form->textField($model,'Version',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Response'); ?>
		<?php echo $form->textField($model,'Response',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'Response'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RequestTime'); ?>
		<?php echo $form->textField($model,'RequestTime'); ?>
		<?php echo $form->error($model,'RequestTime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->