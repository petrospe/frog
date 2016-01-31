<?php
/* @var $this AlmabUpdatesController */
/* @var $model AlmabUpdates */

$this->breadcrumbs=array(
	'Almab Updates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabUpdates', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabUpdates', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Update AlmabUpdates', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon-trash"></i> Delete AlmabUpdates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabUpdates', 'url'=>array('admin')),
);
?>

<h1>View AlmabUpdates #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'file_name',
		'version',
		'upddate',
		'requires',
//		'CustomerId',
                'file_path',
                'file_type',
                'file_size',
	),
)); ?>
