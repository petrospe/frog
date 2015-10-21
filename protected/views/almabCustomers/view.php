<?php
/* @var $this AlmabCustomersController */
/* @var $model AlmabCustomers */

$this->breadcrumbs=array(
	'Almab Customers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlmabCustomers', 'url'=>array('index')),
	array('label'=>'Create AlmabCustomers', 'url'=>array('create')),
	array('label'=>'Update AlmabCustomers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlmabCustomers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlmabCustomers', 'url'=>array('admin')),
);
?>

<h1>View AlmabCustomers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descr',
		'email',
		'guid',
		'updatefrom',
		'updateto',
		'dbserial',
                'iscustom',
	),
)); ?>
