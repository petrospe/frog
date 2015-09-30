<?php
/* @var $this AlmabCustomerupdateController */
/* @var $model AlmabCustomerupdate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'almab-customerupdate-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customerid'); ?>
		<?php echo $form->textField($model,'customerid'); ?>
		<?php echo $form->error($model,'customerid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateid'); ?>
		<?php echo $form->textField($model,'updateid'); ?>
		<?php echo $form->error($model,'updateid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'condate'); ?>
		<?php echo $form->textField($model,'condate'); ?>
		<?php echo $form->error($model,'condate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'action'); ?>
		<?php echo $form->textField($model,'action',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'action'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->