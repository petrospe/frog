<?php
/* @var $this AlmabContractslogController */
/* @var $model AlmabContractslog */

$this->breadcrumbs=array(
	'Almab Contractslogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabContractslog', 'url'=>array('index')),
//	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabContractslog', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Update AlmabContractslog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon-trash"></i> Delete AlmabContractslog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabContractslog', 'url'=>array('admin')),
);
?>

<h1>View AlmabContractslog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
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
