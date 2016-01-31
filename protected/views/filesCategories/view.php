<?php
/* @var $this FilesCategoriesController */
/* @var $model FilesCategories */

$this->breadcrumbs=array(
	'Files Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List FilesCategories', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create FilesCategories', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Update FilesCategories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon-trash"></i> Delete FilesCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon-edit"></i> ManageFilesCategories', 'url'=>array('admin')),
);
?>

<h1>View FilesCategories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
