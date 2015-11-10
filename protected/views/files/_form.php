<?php
/* @var $this FilesController */
/* @var $model Files */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'files-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'filename'); ?>
		<?php echo $form->textField($model,'filename',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'filename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filename_sys'); ?>
		<?php echo $form->textField($model,'filename_sys',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'filename_sys'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_type'); ?>
		<?php echo $form->textField($model,'file_type',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'file_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_size'); ?>
		<?php echo $form->textField($model,'file_size',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'file_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_path'); ?>
		<?php echo $form->textField($model,'file_path',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'file_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_category_id'); ?>
		<?php echo $form->textField($model,'file_category_id'); ?>
		<?php echo $form->error($model,'file_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_support_id'); ?>
		<?php echo $form->textField($model,'file_support_id'); ?>
		<?php echo $form->error($model,'file_support_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_customer_id'); ?>
		<?php echo $form->textField($model,'file_customer_id'); ?>
		<?php echo $form->error($model,'file_customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modification_date'); ?>
		<?php echo $form->textField($model,'modification_date'); ?>
		<?php echo $form->error($model,'modification_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->