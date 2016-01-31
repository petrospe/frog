<?php
/* @var $this AlmabContractsController */
/* @var $model AlmabContracts */

$this->breadcrumbs=array(
	'Almab Contracts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabContracts', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabContracts', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Update AlmabContracts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon-trash"></i> Delete AlmabContracts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabContracts', 'url'=>array('admin')),
);
?>

<h1>View AlmabContracts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
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
