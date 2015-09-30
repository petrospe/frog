<?php
/* @var $this AlmabContractslogController */
/* @var $model AlmabContractslog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'almab-contractslog-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ContractId'); ?>
		<?php echo $form->textField($model,'ContractId'); ?>
		<?php echo $form->error($model,'ContractId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateOfUse'); ?>
		<?php echo $form->textField($model,'DateOfUse'); ?>
		<?php echo $form->error($model,'DateOfUse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MacAddress'); ?>
		<?php echo $form->textField($model,'MacAddress',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'MacAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ComputerName'); ?>
		<?php echo $form->textField($model,'ComputerName',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ComputerName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserName'); ?>
		<?php echo $form->textField($model,'UserName',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'UserName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AccessGranted'); ?>
		<?php echo $form->textField($model,'AccessGranted'); ?>
		<?php echo $form->error($model,'AccessGranted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->