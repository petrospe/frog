<?php
/* @var $this FilesCategoriesController */
/* @var $model FilesCategories */

$this->breadcrumbs=array(
	'Files Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FilesCategories', 'url'=>array('index')),
	array('label'=>'Create FilesCategories', 'url'=>array('create')),
	array('label'=>'View FilesCategories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FilesCategories', 'url'=>array('admin')),
);
?>

<h1>Update FilesCategories <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>