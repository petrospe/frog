<?php
/* @var $this AlmabCustomerrequestController */
/* @var $model AlmabCustomerrequest */

$this->breadcrumbs=array(
	'Almab Customerrequests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabCustomerrequest', 'url'=>array('index')),
//	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabCustomerrequest', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Update AlmabCustomerrequest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon-trash"></i> Delete AlmabCustomerrequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabCustomerrequest', 'url'=>array('admin')),
);
?>

<h1>View AlmabCustomerrequest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'Request',
		'SerialNumber',
		'Version',
		'Response',
		'RequestTime',
	),
)); ?>
