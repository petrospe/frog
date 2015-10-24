<?php
/* @var $this SupportController */
/* @var $model Support */

$this->breadcrumbs=array(
	'Supports'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Support', 'url'=>array('index')),
	array('label'=>'Create Support', 'url'=>array('create')),
	array('label'=>'Update Support', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Support', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Support', 'url'=>array('admin')),
);
?>

<h1>View Support #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'solution',
	),
)); ?>
