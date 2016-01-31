<?php
/* @var $this FilesController */
/* @var $model Files */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List Files', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create Files', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Update Files', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon-trash"></i> Delete Files', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon-edit"></i> ManageFiles', 'url'=>array('admin')),
);
?>

<h1>View Files #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'filename',
		'filename_sys',
		'file_type',
		'file_size',
		'file_path',
		'file_category_id',
		'file_support_id',
		'file_customer_id',
		'create_date',
		'modification_date',
	),
)); ?>
