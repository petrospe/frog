<?php
/* @var $this AlmabContractslogController */
/* @var $model AlmabContractslog */

$this->breadcrumbs=array(
	'Almab Contractslogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlmabContractslog', 'url'=>array('index')),
	array('label'=>'Create AlmabContractslog', 'url'=>array('create')),
	array('label'=>'Update AlmabContractslog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlmabContractslog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlmabContractslog', 'url'=>array('admin')),
);
?>

<h1>View AlmabContractslog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ContractId',
		'DateOfUse',
		'MacAddress',
		'ComputerName',
		'UserName',
		'AccessGranted',
	),
)); ?>
