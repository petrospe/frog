<?php
/* @var $this AlmabUpdatesController */
/* @var $model AlmabUpdates */

$this->breadcrumbs=array(
	'Almab Updates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlmabUpdates', 'url'=>array('index')),
	array('label'=>'Create AlmabUpdates', 'url'=>array('create')),
	array('label'=>'Update AlmabUpdates', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlmabUpdates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlmabUpdates', 'url'=>array('admin')),
);
?>

<h1>View AlmabUpdates #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'file',
		'version',
		'upddate',
		'requires',
//		'CustomerId',
                'file_path',
	),
)); ?>
