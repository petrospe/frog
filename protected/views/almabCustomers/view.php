<?php
/* @var $this AlmabCustomersController */
/* @var $model AlmabCustomers */

$this->breadcrumbs=array(
	'Almab Customers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabCustomers', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabCustomers', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Update AlmabCustomers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon-trash"></i> Delete AlmabCustomers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabCustomers', 'url'=>array('admin')),
);
?>

<h1>View AlmabCustomers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
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
