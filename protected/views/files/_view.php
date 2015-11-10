<?php
/* @var $this FilesController */
/* @var $data Files */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filename')); ?>:</b>
	<?php echo CHtml::encode($data->filename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filename_sys')); ?>:</b>
	<?php echo CHtml::encode($data->filename_sys); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_type')); ?>:</b>
	<?php echo CHtml::encode($data->file_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_size')); ?>:</b>
	<?php echo CHtml::encode($data->file_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_path')); ?>:</b>
	<?php echo CHtml::encode($data->file_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->file_category_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('file_support_id')); ?>:</b>
	<?php echo CHtml::encode($data->file_support_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->file_customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modification_date')); ?>:</b>
	<?php echo CHtml::encode($data->modification_date); ?>
	<br />

	*/ ?>

</div>