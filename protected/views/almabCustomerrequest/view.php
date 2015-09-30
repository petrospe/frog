<?php
/* @var $this AlmabCustomerrequestController */
/* @var $model AlmabCustomerrequest */

$this->breadcrumbs=array(
	'Almab Customerrequests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlmabCustomerrequest', 'url'=>array('index')),
	array('label'=>'Create AlmabCustomerrequest', 'url'=>array('create')),
	array('label'=>'Update AlmabCustomerrequest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlmabCustomerrequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlmabCustomerrequest', 'url'=>array('admin')),
);
?>

<h1>View AlmabCustomerrequest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Request',
		'SerialNumber',
		'Version',
		'Response',
		'RequestTime',
	),
)); ?>
