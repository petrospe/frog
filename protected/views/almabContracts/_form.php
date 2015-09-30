<?php
/* @var $this AlmabContractsController */
/* @var $model AlmabContracts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'almab-contracts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerName'); ?>
		<?php echo $form->textField($model,'CustomerName',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'CustomerName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerEMail'); ?>
		<?php echo $form->textField($model,'CustomerEMail',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'CustomerEMail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SerialNumber'); ?>
		<?php echo $form->textField($model,'SerialNumber',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'SerialNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almUsers'); ?>
		<?php echo $form->textField($model,'almUsers'); ?>
		<?php echo $form->error($model,'almUsers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almVersion'); ?>
		<?php echo $form->textField($model,'almVersion'); ?>
		<?php echo $form->error($model,'almVersion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContractStartDate'); ?>
		<?php echo $form->textField($model,'ContractStartDate'); ?>
		<?php echo $form->error($model,'ContractStartDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContractEndDate'); ?>
		<?php echo $form->textField($model,'ContractEndDate'); ?>
		<?php echo $form->error($model,'ContractEndDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->