<?php
/* @var $this AlmabContractslogController */
/* @var $data AlmabContractslog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContractId')); ?>:</b>
	<?php echo CHtml::encode($data->ContractId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateOfUse')); ?>:</b>
	<?php echo CHtml::encode($data->DateOfUse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MacAddress')); ?>:</b>
	<?php echo CHtml::encode($data->MacAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ComputerName')); ?>:</b>
	<?php echo CHtml::encode($data->ComputerName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserName')); ?>:</b>
	<?php echo CHtml::encode($data->UserName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AccessGranted')); ?>:</b>
	<?php echo CHtml::encode($data->AccessGranted); ?>
	<br />


</div>