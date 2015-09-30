<?php
/* @var $this AlmabCustomersController */
/* @var $data AlmabCustomers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descr')); ?>:</b>
	<?php echo CHtml::encode($data->descr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guid')); ?>:</b>
	<?php echo CHtml::encode($data->guid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatefrom')); ?>:</b>
	<?php echo CHtml::encode($data->updatefrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateto')); ?>:</b>
	<?php echo CHtml::encode($data->updateto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dbserial')); ?>:</b>
	<?php echo CHtml::encode($data->dbserial); ?>
	<br />


</div>