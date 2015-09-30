<?php
/* @var $this AlmabContractsController */
/* @var $model AlmabContracts */

$this->breadcrumbs=array(
	'Almab Contracts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlmabContracts', 'url'=>array('index')),
	array('label'=>'Create AlmabContracts', 'url'=>array('create')),
	array('label'=>'Update AlmabContracts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlmabContracts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlmabContracts', 'url'=>array('admin')),
);
?>

<h1>View AlmabContracts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'CustomerName',
		'CustomerEMail',
		'SerialNumber',
		'almUsers',
		'almVersion',
		'ContractStartDate',
		'ContractEndDate',
	),
)); ?>
