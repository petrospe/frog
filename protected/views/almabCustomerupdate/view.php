<?php
/* @var $this AlmabCustomerupdateController */
/* @var $model AlmabCustomerupdate */

$this->breadcrumbs=array(
	'Almab Customerupdates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlmabCustomerupdate', 'url'=>array('index')),
	array('label'=>'Create AlmabCustomerupdate', 'url'=>array('create')),
	array('label'=>'Update AlmabCustomerupdate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlmabCustomerupdate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlmabCustomerupdate', 'url'=>array('admin')),
);
?>

<h1>View AlmabCustomerupdate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customerid',
		'updateid',
		'condate',
		'action',
	),
)); ?>
