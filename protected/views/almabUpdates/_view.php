<?php
/* @var $this AlmabUpdatesController */
/* @var $data AlmabUpdates */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_name')); ?>:</b>
	<?php echo CHtml::encode($data->file_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('version')); ?>:</b>
	<?php echo CHtml::encode($data->version); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upddate')); ?>:</b>
	<?php echo CHtml::encode($data->upddate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requires')); ?>:</b>
	<?php echo CHtml::encode($data->requires); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_path')); ?>:</b>
	<?php echo ($data->file_path); ?>
	<br />


</div>