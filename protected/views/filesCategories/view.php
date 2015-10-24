<?php
/* @var $this FilesCategoriesController */
/* @var $model FilesCategories */

$this->breadcrumbs=array(
	'Files Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FilesCategories', 'url'=>array('index')),
	array('label'=>'Create FilesCategories', 'url'=>array('create')),
	array('label'=>'Update FilesCategories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FilesCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FilesCategories', 'url'=>array('admin')),
);
?>

<h1>View FilesCategories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
