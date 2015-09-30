<?php
/* @var $this AlmabCustomerrequestController */
/* @var $data AlmabCustomerrequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Request')); ?>:</b>
	<?php echo CHtml::encode($data->Request); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SerialNumber')); ?>:</b>
	<?php echo CHtml::encode($data->SerialNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Version')); ?>:</b>
	<?php echo CHtml::encode($data->Version); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Response')); ?>:</b>
	<?php echo CHtml::encode($data->Response); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RequestTime')); ?>:</b>
	<?php echo CHtml::encode($data->RequestTime); ?>
	<br />


</div>