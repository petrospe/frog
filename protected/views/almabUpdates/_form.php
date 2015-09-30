<?php
/* @var $this AlmabUpdatesController */
/* @var $model AlmabUpdates */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'almab-updates-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'file'); ?>
		<?php echo $form->textField($model,'file',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upddate'); ?>
		<?php echo $form->textField($model,'upddate'); ?>
		<?php echo $form->error($model,'upddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requires'); ?>
		<?php echo $form->textField($model,'requires',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'requires'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerId'); ?>
		<?php echo $form->textField($model,'CustomerId'); ?>
		<?php echo $form->error($model,'CustomerId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->