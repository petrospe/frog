<?php
/* @var $this AlmabCustomerupdateController */
/* @var $data AlmabCustomerupdate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerid')); ?>:</b>
	<?php echo CHtml::encode($data->customerid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateid')); ?>:</b>
	<?php echo CHtml::encode($data->updateid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condate')); ?>:</b>
	<?php echo CHtml::encode($data->condate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('action')); ?>:</b>
	<?php echo CHtml::encode($data->action); ?>
	<br />


</div>