<?php
/* @var $this AlmabContractsController */
/* @var $model AlmabContracts */
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
		<?php echo $form->label($model,'CustomerName'); ?>
		<?php echo $form->textField($model,'CustomerName',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CustomerEMail'); ?>
		<?php echo $form->textField($model,'CustomerEMail',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SerialNumber'); ?>
		<?php echo $form->textField($model,'SerialNumber',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almUsers'); ?>
		<?php echo $form->textField($model,'almUsers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almVersion'); ?>
		<?php echo $form->textField($model,'almVersion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContractStartDate'); ?>
		<?php echo $form->textField($model,'ContractStartDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContractEndDate'); ?>
		<?php echo $form->textField($model,'ContractEndDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->