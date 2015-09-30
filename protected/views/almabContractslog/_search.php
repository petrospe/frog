<?php
/* @var $this AlmabContractslogController */
/* @var $model AlmabContractslog */
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
		<?php echo $form->label($model,'ContractId'); ?>
		<?php echo $form->textField($model,'ContractId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateOfUse'); ?>
		<?php echo $form->textField($model,'DateOfUse'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MacAddress'); ?>
		<?php echo $form->textField($model,'MacAddress',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ComputerName'); ?>
		<?php echo $form->textField($model,'ComputerName',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserName'); ?>
		<?php echo $form->textField($model,'UserName',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AccessGranted'); ?>
		<?php echo $form->textField($model,'AccessGranted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->