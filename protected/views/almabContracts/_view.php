<?php
/* @var $this AlmabContractsController */
/* @var $data AlmabContracts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerName')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerEMail')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerEMail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SerialNumber')); ?>:</b>
	<?php echo CHtml::encode($data->SerialNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almUsers')); ?>:</b>
	<?php echo CHtml::encode($data->almUsers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almVersion')); ?>:</b>
	<?php echo CHtml::encode($data->almVersion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContractStartDate')); ?>:</b>
	<?php echo CHtml::encode($data->ContractStartDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ContractEndDate')); ?>:</b>
	<?php echo CHtml::encode($data->ContractEndDate); ?>
	<br />

	*/ ?>

</div>