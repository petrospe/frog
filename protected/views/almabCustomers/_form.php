<?php
/* @var $this AlmabCustomersController */
/* @var $model AlmabCustomers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'almab-customers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descr'); ?>
		<?php echo $form->textField($model,'descr',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'guid'); ?>
		<?php echo $form->textField($model,'guid',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'guid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatefrom'); ?>
		<?php echo $form->textField($model,'updatefrom'); ?>
		<?php echo $form->error($model,'updatefrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateto'); ?>
		<?php echo $form->textField($model,'updateto'); ?>
		<?php echo $form->error($model,'updateto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dbserial'); ?>
		<?php echo $form->textField($model,'dbserial',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dbserial'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->